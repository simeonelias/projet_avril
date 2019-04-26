<?php


$nom=$prenom=$naissance=$contact=$email=$ville=$commune=$photo=$password=$confirm=$success="";
$nomEr=$prenomEr=$naissanceEr=$contactEr=$emailEr=$villeEr=$communeEr=$photoEr=$passwordEr=$confirmEr=$error="";

if(isset($_POST['submit'])){

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
    
    //pas d erreur pour le commentaire

        // $commentaire = $_POST['nom'];
    
    if(!empty($_FILES['photo'])){
        $photo = $_FILES['photo'];
    }else{
        $photoEr = "Veuillez selectionner une image";
    }
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


    // if($password==$confirm){
    //     $requete=$db->prepare("SELECT * FROM utilisateur WHERE email = ?");
    //     $requete->execute([$email]);
    //     if($requete->rowCount()==0){
           
    //         $insert = $db->prepare("INSERT INTO utilisateur(nom,prenom,naissance,contact,email,ville,commune,photo,etablissement,commentaire,password) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
    //             $insert->execute([$nom,$prenom,$naissance,$contact,$email,$ville,$photo,$commune,$etablissement,$commentaire,$password]);
    //             if($insert){
    //             echo " suucess";
    //             }else{
    //                 echo "echec";
    //             }

    //     }else{
    //         $error="ce compte existe deja";
    //     }

    // }else{
    //     $confirmEr = "les deux mots de passe ne sont pas identiques!";
    // }

    // validation de limage  
    $repertoire ="../images/";
    
    if(!file_exists($repertoire)){
        mkdir($repertoire);
    }
    $target_file =basename($_FILES["photo"]["name"]);
    $img_name= strtolower($_FILES['photo']['name']);
    $img_tmp = $_FILES['photo']['tmp_name'];
    $img_ext = strchr($img_name,'.');
    $img_ext_aut = array('.jpeg','.png','.gif','.jpg');
  

    if(in_array($img_ext,$img_ext_aut)){
        if($password==$confirm){
            $requete=$db->prepare("SELECT * FROM utilisateur WHERE email = ?");
            $requete->execute([$email]);

            if($requete->rowCount()==0){
                if(move_uploaded_file($img_tmp,$repertoire.$target_file)){
                    $insert = $db->prepare("INSERT INTO utilisateur(nom,prenom,naissance,contact,email,ville,commune,photo,password) VALUES(?,?,?,?,?,?,?,?,?)");
                    $insert->execute([$nom,$prenom,$naissance,$contact,$email,$ville,$commune,$img_name,$password]);
                    if($insert){
                      $success = "Enregistrement effectué avec succes!";
                    }else{
                        echo "echec";
                    }
                }
            }else{
                $error="ce compte existe deja";
            }

        }else{
            $confirmEr = "les deux mots de passe ne sont pas identiques!";
        }
        
    }else{
        $photoEr = "Seules les extensions jgp, jpeg, gif et pnp sont autorisée!";
    }



}
?>