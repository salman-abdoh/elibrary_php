<?php
class Prod{
    public $pdo;


    public function __construct(){

        $dsn='mysql:hostname=localhost;dbname=products';
        $username='root';
        $password='';
        $this->pdo=new PDO($dsn,$username,$password,array(
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
        ));
    }


   

    function select(){

        $stmt=$this->pdo->prepare("select * from items");
        $stmt->execute();
        return $stmt->fetchAll();
        
    }

}
?>