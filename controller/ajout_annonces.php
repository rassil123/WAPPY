<?php


require_once '../model/annonces.php';
    require_once '../helpers/session_helper.php';
    require_once '../libraries/Database.php';


class annonces
{

    private $annocesModel;

    public function __construct()
    {
        $this->annocesModel = new annonce;
    }

    public function registerannonces()
    {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            
            $data = [
                'namenft' => trim($_POST['namenft']),
                'lien' => trim($_POST['lien']),
                
                'idusergiver' => trim($_POST['idusergiver']),
                
            ];

            if(empty($data['namenft']) || empty($data['lien']) )
            {
                flash("annonces", "Please fill out all inputs");
                redirect("../view/ajout_annoces.php");
            }
           /* 
            if(!filter_var($data['useremail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("../view/signup.php");
            }
            */

            if( strlen((string)$data['namenft']) < 6)
            {
                flash("annonces", "Invalid nftname length must be more than 6");
                redirect("../view/ajout_annoces.php");
            } 
            

           /* 
           if($this->annocesModel->findNftByidusergiverorgetter($data['idusergiver'], $data['idusergiver'])){
                flash("register", "Username or email already taken");
                redirect("../view/ajout_annoces.php");
            }*/

            
            
            
            if($this->annocesModel->registerannonce($data))
            {   

                redirect("../index.php");
            }else{
                die("Something went wrong");
            }
        }




        public function registerannoncesechanger()
    {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            
            $data = [
                'namenft' => trim($_POST['namenft']),

                'lien' => trim($_POST['lien']),
                'liennfttoswapwith'=> trim($_POST['liennfttoswapwith']),
                'idusergiver' => trim($_POST['idusergiver']),//$_SESSION['useremail]

                'idusergetter' => trim($_POST['idusergetter']),//idusergiver de l'nft a prendre

                'namenfttoswapwith' => trim($_POST['namenfttoswapwith'])
                
            ];

            if(empty($data['namenft']) || empty($data['lien']) )
            {
                flash("ajoutechangeannonces", "Please fill out all inputs");
                redirect("../view/ajout_annoces.php");
            }
           /* 
            if(!filter_var($data['useremail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("../view/signup.php");
            }
            */

            if( strlen((string)$data['namenft']) < 6)
            {
                flash("ajoutechangeannonces", "Invalid nftname length must be more than 6");
                redirect("../view/ajout_annoces.php");
            } 
            

           /* 
           if($this->annocesModel->findNftByidusergiverorgetter($data['idusergiver'], $data['idusergiver'])){
                flash("register", "Username or email already taken");
                redirect("../view/ajout_annoces.php");
            }*/

            
            
            
            if($this->annocesModel->registerannonceachanger($data))
            {
                //if ($this->annocesModel->updatenftgetter($data['idusergiver'], $data['namenfttoswapwith'])) 
                $this->annocesModel->updatenfttoget($data['lien'], $data['namenfttoswapwith']);
                $this->annocesModel->updatenfttoget($data['liennfttoswapwith'], $data['namenft']);
               $this->annocesModel->updatenftgetter($data['idusergiver'],$data['namenfttoswapwith']);
             


                redirect("../index.php");
                    
                
                
            }else{
                die("Something went wrong");
            }
        }
/*
        public function updategetter()
        {
            
           // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
            $data1 = [
                'idnft' => trim($_POST['idnft']),
                'idusergiver' => trim($_POST['idusergiver']),
                'idusergetter'=> trim($_POST['idusergetter'])
                

             ];
             if(empty($data['username']))
             {
                
                    flash("update_username", "Please fill out all inputs");
                    redirect("../view/profile.php");
                
             }
             if($this->annocesModel->updatenftgetter($data1['idusergiver'],$data1['namenfttoswapwith']))
             {
                
                redirect("../view/affichage_des_annonces.php");
             }
             else{
                die("Something went wrong");
            }

        }

*/






}

$init = new annonces;

if($_SERVER['REQUEST_METHOD'] == 'POST')//    mesure de securite
    {
        switch($_POST['type']){
            case 'ajout':

                
                $init->registerannonces();
                
                break;
            
                case 'ajoutechange':
                $init->registerannoncesechanger();
                
                break;
/*
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
                */
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
