<?php
class Connexion{
private $DbName="db_optic";
private $DbHost="localhost";
private $DbPassword="";
private $DbLogin="root";
private $Connexion=null;

public  function  __construct(){

}
public  function getConnexionInstance(){
    
    try {
        $this->Connexion = new PDO("mysql:host=".$this->DbHost.";dbname=".$this->DbName, $this->DbLogin,$this->DbPassword);

        //echo "Connection Ok ";
        $this->Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->Connexion;
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        return $this->Connexion;
        }
       

}
    
}
?>