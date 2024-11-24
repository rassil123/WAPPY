<?php
require_once '../libraries/Database.php';

class annonce
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findNftByidusergiverorgetter($idusergiver, $idusergetter){
        $this->db->query('SELECT * FROM nft WHERE idusergiver = :idusergiver OR idusergetter = :idusergetter');
        $this->db->bind(':idusergiver', $idusergiver);
        $this->db->bind(':idusergetter', $idusergetter);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }


    public function registerannonce($data){
        $this->db->query('INSERT INTO nft (namenft, lien, idusergiver) 
        VALUES (:namenft, :lien, :idusergiver)');
        //Bind values
        $this->db->bind(':namenft', $data['namenft']);
        $this->db->bind(':lien', $data['lien']);
       
        $this->db->bind(':idusergiver', $data['idusergiver']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function listnft()
{   
    $this->db->query('SELECT * FROM nft WHERE idusergetter IS NULL');
    $list=$this->db->resultSet();
    

    if(!empty($list))
    {
        return $list;
    
    }else{
        return false;
    }
}

public function registerannonceachanger($data)
{
    $this->db->query('INSERT INTO nft (namenft, lien, idusergiver, idusergetter) 
    VALUES (:namenft, :lien, :idusergiver, :idusergetter)');
    //Bind values
    $this->db->bind(':namenft', $data['namenft']);

    $this->db->bind(':lien', $data['lien']);
   
    $this->db->bind(':idusergiver', $data['idusergiver']);

    $this->db->bind(':idusergetter', $data['idusergetter']);

    //Execute
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }
}

public function listnftaconfirmer($idusergiver)
{       
        
        $this->db->query('SELECT * FROM nft WHERE idusergetter = :idusergetter ');
        
        $this->db->bind(':idusergetter', $idusergiver);
        
    $list=$this->db->resultSet();
    

    if(!empty($list))
    {
        return $list;
    
    }else{
        return false;
    }
}


public function listnftaehcanger($idusergiver)
{       
        
        $this->db->query('SELECT * FROM nft WHERE idusergiver = :idusergiver ');
        
        $this->db->bind(':idusergiver', $idusergiver);
        
    $list=$this->db->resultSet();
    

    if(!empty($list))
    {
        return $list;
    
    }else{
        return false;
    }
}



public function updatenftgetter($idusergetter, $namenft)
    {
        
            $this->db->query('UPDATE nft SET idusergetter = :idusergetter WHERE namenft= :namenft');
            $this->db->bind(':idusergetter', $idusergetter);
            $this->db->bind(':namenft', $namenft);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }
    /*
function getlienfromnfttoget()
{
    $this->db->query('SELECT * FROM nft WHERE idusergiver = :idusergiver ');
        
    $this->db->bind(':idusergiver', $idusergiver);
    
$list=$this->db->resultSet();


if(!empty($list))
{
    return $list;

}else{
    return false;
}

}*/
   public function updatenfttoget($lientoget, $namenft)
    {
        
            $this->db->query('UPDATE nft SET lientoget = :lientoget  WHERE namenft= :namenft');
            $this->db->bind(':lientoget', $lientoget);
            $this->db->bind(':namenft', $namenft);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }

   public function transactionaccepte($namenft)
    {
        
            $this->db->query('UPDATE nft SET idusergiver = idusergetter  WHERE namenft= :namenft');
            
            $this->db->bind(':namenft', $namenft);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }

    public function mettreanullegetter($namenft)
    {
        
            $this->db->query('UPDATE nft SET idusergetter = NULL  WHERE namenft= :namenft');
            
            $this->db->bind(':namenft', $namenft);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }

   public function transactionaccepteprlien($liennft)
    {
        
            $this->db->query('UPDATE nft SET idusergiver = idusergetter  WHERE lien= :liennft');
            
            $this->db->bind(':liennft', $liennft);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }
    
    public function mettreanullegetterparlien($liennft)
    {
        
            $this->db->query('UPDATE nft SET idusergetter = NULL  WHERE lien= :liennft');
            
            $this->db->bind(':liennft', $liennft);
            
            if($this->db->execute())
            {
                return true;
            }else{
                return false;
            }
    }

/*--------------------------------------------------------------------------------------------*/

    public function giverrecoitgetter($liennfttoswapwith)
    {

        $this->db->query('UPDATE nft SET idusergiver=idusergetter WHERE lien=:liennfttoswapwith ');
        $this->db->bind(':liennfttoswapwith', $liennfttoswapwith);
        if($this->db->execute())
        {
            return true;
        }else{
            return false;
        }


    }


    public function getterrecoitnulle($liennfttoswapwith)
    {
        $this->db->query('UPDATE nft SET idusergetter = NULL WHERE lien = :liennfttoswapwith'); 
        $this->db->bind(':liennfttoswapwith',$liennfttoswapwith);
        if($this->db->execute())
        {
            return true;
        }  
        else{
            return false;
        }


    }


    public function lienrecoitlientoget($liennfttoswapwith)
    {
        $this->db->query('UPDATE nft SET lien=lientoget WHERE lien = :liennfttoswapwith');
        $this->db->bind(':liennfttoswapwith', $liennfttoswapwith);
        if ($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }


    }


    public function lientogetrecoitnulle($liennfttoswapwith)
    {
        $this->db->query('UPDATE nft SET lientoget=NULL WHERE lien=:liennfttoswapwith');
        $this->db->bind(':liennfttoswapwith', $liennfttoswapwith);
        if($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }

    }

/*-------------------------------------------------------------------------*/
    
    public function giverdevientgetter($lienachanger)
    {

        $this->db->query('UPDATE nft SET idusergiver=idusergetter WHERE namenft=:namenft');
        $this->db->bind(':namenft', $lienachanger);
        if($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }

        


    }


    public function getterdevientnulle($lienachanger)
    {
        $this->db->query('UPDATE nft SET idusergetter=NULL WHERE namenft=:namenft');
        $this->db->bind(':namenft', $lienachanger);
        if($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }

    }


    public function liendevientlientoget($lienachanger)
    {
        $this->db->query('UPDATE nft SET lien=lientoget WHERE namenft=:namenft');
        $this->db->bind(':namenft', $lienachanger);
        if($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }



    }


    public function lientogetdevientnulle($lienachanger)
    {

        $this->db->query("UPDATE nft SET lien=NULL WHERE namenft=:namenft");
        $this->db->bind(':namenft', $lienachanger);
        if($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }

    }





}