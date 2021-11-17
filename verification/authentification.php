<?php 
session_start();
   if ( isset($_POST['login']) AND isset($_POST['password'])) {
   
   $login = $_POST['login'];
   $password = $_POST['password'];
    include("../db/connexion.php");

      if(empty($login)){
        $message="Le champ numero de carte est obligatoire";
        header("Location:../login.php?error=$message&$data");
        exit;
     }else if(empty($password)){
        $message="Le champ password est obligatoire";
        header("Location:../login.php?error=$message&$data");
        exit;
     }else{
      
        $req="SELECT * FROM etudiant WHERE num_carte=?";
        $res=$conn->prepare($req);
        $res->execute([$login]);
        if($res->rowCount()==1){
            $user=$res->fetch();
            if($user['login']==$login){
               if(password_verify($password,$user['password'])){
                  $_SESSION['login']=$user['login'];
                  $_SESSION['id_user']=$user['id_user'];
                  $_SESSION['nom']=$user['nom'];
                  $_SESSION['prenom']=$user['prenom'];
                  
                  header("Location:../accueil.php");
                  exit;
               }else{
                  $message="Numero de carte ou password invalide";
               header("Location:../login.php?error=$message&$data");
               exit;
               }
            }else{
               $message="Numero de carte ou password invalide";
               header("Location:../login.php?error=$message&$data");
               exit;
            }
        }
     }

}else{
    header("Location:../login.php");
    exit;
}


?>