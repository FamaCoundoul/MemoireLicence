<?php
    
    
    $dbname="restauration";
    $sname="localhost";
    $uName="root";
    $pass="";

    try{
        $conn= new PDO("mysql:host=$sname;dbname=$dbname",$uName,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){

        echo"Erreur: ".$e->getMessage();
    }


?>