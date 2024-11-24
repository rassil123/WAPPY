<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require_once '../model/User.php';
    require_once '../helpers/session_helper.php';
    require_once '../libraries/Database.php';
    require_once  '../view/mail.php';

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';


    class Users {

        private $userModel;
        
        public function __construct()
        {
            $this->userModel = new User;
        }

    public function register()
    {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            
            $data = [
                'username' => trim($_POST['username']),
                'useremail' => trim($_POST['useremail']),
                
                'userpwd' => trim($_POST['userpwd']),
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            if(empty($data['username']) || empty($data['useremail']) || 
            empty($data['userpwd']) || empty($data['pwdRepeat'])){
                flash("register", "Please fill out all inputs");
                redirect("../view/signup.php");
            }
            
            if(!filter_var($data['useremail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("../view/signup.php");
            }
            
            if(strlen($data['userpwd']) < 6){
                flash("register", "Invalid password length must be more than 6");
                redirect("../view/signup.php");
            } 
            else if($data['userpwd'] !== $data['pwdRepeat']){
                flash("register", "Passwords don't match");
                redirect("../view/signup.php");
            }

            if($this->userModel->findUserByEmailOrUsername($data['useremail'], $data['username'])){
                flash("register", "Username or email already taken");
                redirect("../view/signup.php");
            }

            
            $data['userpwd'] = password_hash($data['userpwd'], PASSWORD_DEFAULT);
            
            if($this->userModel->register($data))
            {   
               
/* envoi du mail*/
    $mail = new PHPMailer(true);
    $mailer = new mailenvoyer;

    try {
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
         //Server settings
         //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
         $mail->isSMTP();                                              //Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                         //Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                     //Enable SMTP authentication
         $mail->Username   = 'hhsassi6@gmail.com';                     //SMTP username
         $mail->Password   = 'vhlcnpycwvnvkcmo';                        //SMTP password
         $mail->SMTPSecure = 'tls';                                      //Enable implicit TLS encryption
         $mail->Port       = 587;                                       //TCP port to connect to; use 587 if you have set `SMTPSecPHPMailer::ENCRYPTION_STARTTLS`

         //Recipients
         $mail->setFrom('hhsassi6@gmail.com', 'SWAPPED');
         $mail->addAddress($data['useremail'], $data['username']);     //Add a recipient
                                
         //Content
        $mail->isHTML(true);                                         //Set email format to HTML
            $mail->Subject = 'You have been registred sucessfully';
         $mail->Body    = $mailer->writehtml();
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

         $mail->send();
        echo 'Message has been sent';
        /*partie mail termine avec succes*/
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
    }
                
                redirect("../view/login.php");
            }else{
                die("Something went wrong");
            }
        }


        
        
        
    public function update_username()
        {
            
           // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
            $data1 = [
                'username' => trim($_POST['username']),
                'useremail'=> trim($_POST['useremail']),
             ];
             /*if(empty($data['username']))
             {
                
                    flash("update_username", "Please fill out all inputs");
                    redirect("../view/profile.php");
                
             }*/
             if($this->userModel->updateUser_username($data1['username'],$data1['useremail']))
             {
                $_SESSION['username']=$data1['username'];
                redirect("../view/profile.php");
             }
             else{
                die("Something went wrong");
            }

        }

        public function createUserSession($user)
        {

            $_SESSION['username'] = $user->username;
             $_SESSION['useremail'] = $user->useremail;
             redirect("../index.php");
         }


         
     public function update_userpwd()
        {
            
           // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
            $data2 = [
                'userpwd' => trim($_POST['userpwd']),
                'useremail'=> trim($_POST['useremail']),

             ];
             /*if(empty($data['username']))
             {
                
                    flash("update_username", "Please fill out all inputs");
                    redirect("../view/profile.php");
                
             }*/


            $hashedPassword = password_hash($data2['userpwd'], PASSWORD_DEFAULT);

             if($this->userModel->updateUser_userpassword($hashedPassword ,$data2['useremail']))
             {
                redirect("../view/profile.php");
             }
             else{
                die("Something went wrong");
            }

        }

       


    public function createsessionadmine($useremail)
         {
            
            if($resultat=$this->userModel->find($useremail))
                {
                    if($resultat['roles'] == 'admine')
                        {
                            $_SESSION['username'] = $resultat['username'];
                            $_SESSION['useremail'] = $resultat['useremail'];
                            $_SESSION['roles'] = $resultat['roles'];    
                            return true; 
                        }
                        else
                            {
                                return false;
                         }
                }
        }
               

    public function login()
    {
        
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

       
        $data=[
            'useremail' => trim($_POST['useremail']),
            'userpwd' => trim($_POST['userpwd'])
        ];

        if(empty($data['useremail']) || empty($data['userpwd'])){
            flash("login", "Please fill out all inputs");
            header("location: ../view/login.php");
            exit();
        }

        
        if($this->userModel->findUserByEmailOrUsername($data['useremail'], $data['useremail']))
        {
            //Utilisateur trouve
            $loggedInUser = $this->userModel->login($data['useremail'], $data['userpwd']);
            if($loggedInUser){
                
                if($this->createsessionadmine($data['useremail']))
                {
                    header('location: ../view/basic-table.php ');
                }
                else{
                $this->createUserSession($loggedInUser);
                }
                
                
            }else{
                flash("login", "Password Incorrect");
                redirect("../view/login.php");
            }
        }else{
            flash("login", "No user found");
            redirect("../view/login.php");
        }
    }




    public function delete()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=
        [
            'username' => $_POST['username']
            
        ];

        if($this->userModel->deleteUser($_POST['username']))
        {
            redirect("../view/login.php");
        }else{
            die("Something went wrong");
        }
    }



    

    public function logout()
    {

        unset($_SESSION['username']);
        unset($_SESSION['useremail']);
        unset($_SESSION['roles']);
        session_destroy();
        redirect("../index.php");


    }

   
    
    public function register_admin()
    {
        
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        
        $data = [
            'username' => trim($_POST['username']),
            'useremail' => trim($_POST['useremail']),
            
            'userpwd' => trim($_POST['userpwd']),
            'pwdRepeat' => trim($_POST['pwdRepeat'])
        ];

        
        if(empty($data['username']) || empty($data['useremail']) || 
        empty($data['userpwd']) || empty($data['pwdRepeat'])){
            flash("register", "Please fill out all inputs");
            redirect("../view/basic-table.php");
        }

        if(!filter_var($data['useremail'], FILTER_VALIDATE_EMAIL)){
            flash("register", "Invalid email");
            redirect("../view/basic-table.php");
        }

        if(strlen($data['userpwd']) < 6){
            flash("register", "Invalid password length must be more than 6");
            redirect("../view/basic-table.php");
        } else if($data['userpwd'] !== $data['pwdRepeat']){
            flash("register", "Passwords don't match");
            redirect("../view/basic-table.php");
        }

        
        if($this->userModel->findUserByEmailOrUsername($data['useremail'], $data['username'])){
            flash("register", "Username or email already taken");
            redirect("../view/basic-table.php");
        }
                            /*tout les tests sont valides*/

        $data['userpwd'] = password_hash($data['userpwd'], PASSWORD_DEFAULT);

                    /*register*/
        if($this->userModel->register($data)){
            redirect("../view/basic-table.php");
        }else{
            die("Something went wrong");
        }
    }
    
}

    
    $init = new Users;
    

   
    if($_SERVER['REQUEST_METHOD'] == 'POST')//    mesure de securite
    {
        switch($_POST['type']){
            case 'register':

                
                $init->register();
                break;
            
                case 'login':
                $init->login();
                redirect("../index.php");
                break;

                case 'delete':
                $init->delete();

                case 'register_admin':
                    $init->register_admin();
                    break;
                case 'update_username':
                    unset($_SESSION['username']);
                    $init->update_username();
                case 'update_userpwd':
                    $init->update_userpwd();

                    break;
                
            default:
            redirect("../index.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../index.php");
        }
    }

    
    

    