<?php
$email=$password="";
$emailEr=$passwordEr=$error="";

if(isset($_POST['submit'])){

    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $emailEr = "Votre email est requis!";
    }
    if(!empty($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $passwordEr = "Veuillez entrer un mot de passe!";
    }


    $requete = $db->prepare("SELECT * FROM utilisateur WHERE email=? AND password=?");
    $requete->execute([$email,$password]);
    $data= $requete->fetch();
    if($requete->rowCount()==1){
        $_SESSION['id']=$data['id'];
        header('location:index.php?page=dashbord&id='.$_SESSION['id']);
    }else{
        $error ="ce compte n'existe pas!";
    }
}
?>