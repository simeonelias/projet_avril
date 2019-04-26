<?php


$nom=$prenom=$description=$photo=$type=$constructeur=$id="";
$nomEr=$descriptionEr=$photoEr=$error=$constructeurEr=$success="";

if(isset($_POST['submit'])){
    $id=$_GET['id'];
    // if(!empty($_POST['constructeur'])){
    //     $constructeur = $_POST['constructeur'];
    // }else{
    //     $constructeurEr = "Veuillez votre  nom!";
    // }
    if(!empty($_POST['nom'])){
        $nom = $_POST['nom'];
    }else{
        $nomEr = "Veuillez saisir le nom!";
    }
    if(!empty($_POST['description'])){
        $description = $_POST['description'];
    }else{
        $descriptionEr = "Veuillez saisir votre description!";
    }
    if(!empty($_POST['type'])){
        $type = $_POST['type'];
    }else{
        $typeEr = "Veuillez saisir le type!";
    }

    if(!empty($_FILES['photo'])){
        $photo = $_FILES['photo'];
    }else{
        $photoEr = "Veuillez selectionner une image";
    }
  
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

                if(move_uploaded_file($img_tmp,$repertoire.$target_file)){
                    $insert = $db->prepare("INSERT INTO maisons(titre,description,image,type,constructeur) VALUES(?,?,?,?,?)");
                    $insert->execute([$nom,$description,$img_name,$type,$id]);
                    if($insert){
                        $success ="enregistrement effectué avec succes!";
                    }else{
                        echo "echec";
                    }
                }
  
    }else{
        $photoEr = "Seules les extensions jgp, jpeg, gif et pnp sont autorisée!";
    }



}
?>