<?php


?>


 

<div class="detail">
<div class="jumbotron jumbotron2">
<center>
<div class="card mb-3" style="width:50rem; margin:10px auto; color:black">
  <?php $maison=getM() ?>

  <div class="card-body">
    <h3 class="card-title"><?= $maison->titre ?></h3>
    <h6 class="card-subtitle text-muted">construite par <?= $maison->nom ?> <?= $maison->prenom ?></h6>
  </div>
  <img style="height: 450px; width: 100%; display: block;" alt="Card image" src="images/<?= $maison->image ?>">
 
  <div class="card-body">
    <h6 class="card-subtitle text-muted"><?= $maison->description ?></h6>
  </div>
  <div class="card-footer ">
<button class="btn btn-primary" type="button"><a style="color:azure" href="#commenter">commenter</a> </button>


  </div>
</div>

</center>
</div>
</div>

<hr><hr class="my-4">
<center>

<div class="container" >
<div class="card border-primary mb-3" style="max-width: 50rem;">
  <div class="card-header" style="background-color:violet "><center><h2>Commentaires</h2></center></div>
  <div class="card-body">




<?php

$comments=get_comments();
 

foreach ($comments as $comment) {
if ($comment){?>
<blockquote class="blockquote" style="border: 1px solid #ccc; border-left:6px solid purple; border-radius: 2px">
  <p class="mb-0"><?=$comment->commentaire?></p>
  <footer class="blockquote-footer">posté par <?=$comment->nom?> <cite title="Source Title"> le <?=$comment->date?></cite></footer>
</blockquote>

 <?php
 
}else{
  echo "Aucun commentaire pour le moment!";
}
}
?>







</div>

  </div>
</div>
</center>












<?php
$email=$commentaire=$nom="";
$emailEr=$nomEr= $commentaireEr=$error="";

if(isset($_POST['submit'])){

    if(!empty($_POST['nom'])){
        $nom = $_POST['nom'];
    }else{
        $nomEr = "Votre nom est requis!";
    }
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $emailEr = "Votre email est requis!";
    }
    if(!empty($_POST['commentaire'])){
        $commentaire = $_POST['commentaire'];
    }else{
        $commentaireEr = "dites quelque chose!";
    }

if(!empty($nom) && !empty($email) && !empty($commentaire)){
      comment($nom,$email,$commentaire);
    ?>
  <script type="text/javascript">
    window.location.replace('index.php?page=detail&id=<?=$_GET['id']?>')
  </script>
  <?php
}else{
  $error="aucun champ ne doit être vide!";
}



}
?>



<div class="comment" style=" background-color: rgb(220, 241, 241);">

<div class="card text-center border-light" id="commenter"style="max-width:50rem; margin:auto auto;">
  <div class="card-header">
   <h4>Commenter</h4>
  </div>
  <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Entrer nom">
    <small id="emailHelp" class="form-text texterror"><?= $nomEr?></small>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer email">
    <small id="emailHelp" class="form-text texterror"><?= $emailEr?></small>
  </div>


  <div class="form-group">
      <label for="exampleTextarea">Votre commentaire ici</label>
      <textarea class="form-control" id="exampleTextarea" name="commentaire" rows="3"></textarea>
      <small id="emailHelp" class="form-text texterror"><?= $commentaireEr?></small>
  </div>
  <small id="emailHelp" class="form-text texterror"><?= $error?></small>
  </div>
  <div class="card-footer">
  <button  style=" " type="submit" name="submit" class="btn btn-primary btn-block ">envoyer</button>
 </form>
  </div>
</div>
</div>



