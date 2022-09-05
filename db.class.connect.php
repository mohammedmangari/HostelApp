<?php
class DB {
    private $host='localhost';
    private $username='root';
    private $mdp='';
    private $database='compte';
    private $db ;
    public function __construct($host=null ,$username=null , $mdp=null ,$database= null ){
        if($host != null ){
            $this->host =$host ;  
            $this->username =$host ;  
            $this->mdp =$mdp ;  
            $this->database =$database ;  
        }
        try {
            $this->db =new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username,$this->mdp ,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
        }catch(PDOException $e ){
            die('<h1>impossible de se connecter a la base de donnees </h1>') ;
        }


    } 
    public function query($sql , $data= array()){
         $req=$this->db->prepare($sql);
         $req->execute($data);
         return $req->fetchAll(PDO::FETCH_OBJ);
    }
}