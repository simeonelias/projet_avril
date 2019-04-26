<?php


$nom=$prenom=$naissance=$contact=$email=$ville=$commune=$photo=$password=$confirm="";
$nomEr=$prenomEr=$naissanceEr=$contactEr=$emailEr=$villeEr=$communeEr=$photoEr=$passwordEr=$confirmEr=$error="";
$id=$_GET['id'];
if(isset($_POST['submit'])){

    $id = $_GET['id'];
    if(!empty($_POST['nom'])){
        $nom = $_POST['nom'];
    }else{
        $nomEr = "Veuillez saisir votre nom!";
    }
    if(!empty($_POST['prenom'])){
        $prenom = $_POST['prenom'];
    }else{
        $prenomEr = "Veuillez saisir votre prenom!";
    }
    if(!empty($_POST['naissance'])){
        $naissance = $_POST['naissance'];
    }else{
        $naissanceEr = "Quelle est votre date de Naissance?";
    }
    if(!empty($_POST['contact'])){
        $contact = $_POST['contact'];
    }else{
        $contactEr = "Votre numéro de telephone!";
    }
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $emailEr = "Votre email est requis!";
    }
    if(!empty($_POST['ville'])){
        $ville = $_POST['ville'];
    }else{
        $villeEr = "Veuillez saisir votre lieu de résidence";
    }
    if(!empty($_POST['commune'])){
        $commune = $_POST['commune'];
    }else{
        $communeEr = "Veuillez saisir votre nom!";
    }
    // if(!empty($_POST['etablissement'])){
    //     $etablissement = $_POST['etablissement'];
    // }else{
    //     $etablissementEr = "Quel est votre établissement?";
    // }
    


        $commentaire = $_POST['nom'];
    
   
    if(!empty($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $passwordEr = "Veuillez entrer un mot de passe!";
    }
    if(!empty($_POST['confirm'])){
        $confirm = $_POST['confirm'];
    }else{
        $confirmEr = "Veuillez confirmer votre password";
    }


    if($password==$confirm){
        $requete=$db->prepare("SELECT * FROM utilisateur WHERE id = ?");
        $requete->execute([$id]);
       
           
            $insert = $db->prepare("UPDATE utilisateur SET nom,prenom,naissance,contact,email,ville,commune,password WHERE id=?");
                $insert->execute([$nom,$prenom,$naissance,$contact,$email,$ville,$commune,$password,$id]);
                if($insert){
                echo " suucess";
                }else{
                    echo "echec";
                }

    

    }else{
        $confirmEr = "les deux mots de passe ne sont pas identiques!";
    }
    }
?>
