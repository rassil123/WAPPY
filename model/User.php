<?php
require_once '../libraries/Database.php';

class User {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    
    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM user WHERE username = :username OR useremail = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }



public function find($useremail)
{
     $this->db->query('SELECT * FROM user WHERE useremail = :useremail');
     $this->db->bind(':useremail', $useremail);
     
     $row = $this->db->single_assoc_array();
             
     
    if($this->db->rowCount() > 0){
        return $row;
    }else{
        return false;
        }
}

function deleteUser($username)
    {
       // echo($username);
    
        $this->db->query('DELETE FROM user WHERE username = :username');
        $this->db->bind(':username', $username);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

                                                       
    }



public function listusers()
{   
    $this->db->query('SELECT * FROM user');
    $list=$this->db->resultSet();
    

    if(!empty($list))
    {
        return $list;
    
    }else{
        return false;
    }
}


public function register($data){
        $this->db->query('INSERT INTO user (username, useremail, userpwd) 
        VALUES (:name, :email, :password)');
        //Bind values
        $this->db->bind(':name', $data['username']);
        $this->db->bind(':email', $data['useremail']);
       
        $this->db->bind(':password', $data['userpwd']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->userpwd;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }


    function updateUser_username($username, $useremail)
    {
        
            $this->db->query('UPDATE user SET username = :username WHERE useremail= :useremail');
            $this->db->bind(':username', $username);
            $this->db->bind(':useremail', $useremail);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }

    
    function updateUser_userpassword($userpwd, $useremail)
    {
        
            $this->db->query('UPDATE user SET userpwd = :userpwd WHERE useremail= :useremail');
            $this->db->bind(':userpwd', $userpwd);
            $this->db->bind(':useremail', $useremail);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }
    
    function updateUser_useremail($username, $useremail)
    {
        
            $this->db->query('UPDATE user SET useremail = :useremail, WHERE username= :username');
            $this->db->bind(':useremail', $useremail);
            $this->db->bind(':username', $username);
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
    }





/*
    //Reset Password
    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE user SET userpwd=:pwd WHERE useremail=:email');
        $this->db->bind(':pwd', $newPwdHash);
        $this->db->bind(':email', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }*//*


    /*-------------------------------------------------------------------------*/
            /************************* a choisir entre les deux  
    try {
        $liste = query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }



/*---------------------------------------------------------------------*/

/*
public function findRole($roles){
    $this->db->query('SELECT * FROM user WHERE roles = :roles');
    $this->db->bind(':roles', $roles);
    

    $row = $this->db->single();

    //Check row
    if($this->db->rowCount() > 0){
        return $row;
    }else{
        return false;
    }
}
*/

}