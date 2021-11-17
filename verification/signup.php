<?php 
   if (isset( $_POST['inscrire']) AND isset($_POST['nom'])AND isset($_POST['prenom']) AND isset($_POST['login']) AND isset($_POST['password'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$login = $_POST['login'];
	$password = $_POST['password'];
    $new_file=null;
	
    include("../db/connexion.php");

    $data='nom='.$nom.'&prenom='.$prenom;
    if(empty($nom)){
        $message="Le champ nom est obligatoire";
        header("Location:../signup.php?error=$message&$data");
        exit;
    }else if(empty($prenom)){
        $message="Le champ prenom est obligatoire";
        header("Location:../signup.php?error=$message");
        exit;
    }else if(empty($login)){
        $message="Le champ numero de carte est obligatoire";
        header("Location:../signup.php?error=$message&$data");
        exit;
    }else if(empty($password)){
        $message="Le champ password est obligatoire";
        header("Location:../signup.php?error=$message&$data");
        exit;
    }else{
       $req="SELECT login FROM users WHERE login=?";
       $res=$conn->prepare($req);
       $res->execute([$login]);
       if($res->rowCount() >0){
           $message="Le numero de carte ($login) existe deja";
           header("Location:../signup.php?error=$message&$data");
           exit;
        }else{
            //Pour crypter un mot de passe
            $password=password_hash($password, PASSWORD_DEFAULT);
           
               $req="INSERT INTO etudiant(nom,prenom,num_carte,password) VALUES (?,?,?,?)";
               $ligne=$conn->prepare($req);
               $ligne->execute([$nom,$prenom,$login,$password]);
             
            
            $resultat="Le Compte a ete bien cree";
              header("Location:../login.php?bien=$resultat");
              exit;
    
        }
    }
	
}else{
    header("Location:../signup.php");
    exit;
}


?>