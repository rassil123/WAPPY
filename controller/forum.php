<?php


require_once '../model/annonces.php';
    require_once '../helpers/session_helper.php';
    require_once '../libraries/Database.php';


class forum
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
