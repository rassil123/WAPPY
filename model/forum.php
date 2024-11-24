<?php
require_once '../libraries/Database.php';

class forum
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
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


function updatenftgetter($idusergetter, $namenft)
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
    
    function transactionaccepte($namenft)
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

    function mettreanullegetter($namenft)
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

    function transactionaccepteprlien($liennft)
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
    
    function mettreanullegetterparlien($liennft)
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




}