<style>
label{
    margin-left: 0px;
    color:
}
.texterror{
    color:red;
}
</style>

<?php if ($success) {?>

<center>
<div class="alert alert-dismissible alert-success">
  <button class="close" type="button" data-dismiss="alert">&times;</button>
  <strong><?=$success?></strong><a class="alert-link" href="index.php?page=liste">Voir la liste</a>.
</div>
</center>

<?php
}  ?>



<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 offset-md-2 offset-sm-1">

<form action="" method="post" enctype="multipart/form-data">
<div class="card text-center">
  <div class="card-header">
   <h4>Formulaire d'enregistrement</h4>
  </div>
  <div class="card-body">



  
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
    

  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Entrer nom">
    <small id="emailHelp" class="form-text texterror"><?= $nomEr?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom" placeholder="Entrer prenom">
    <small id="emailHelp" class="form-text texterror"><?= $prenomEr?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de naissance</label>
    <input type="date" class="form-control" id="text" name="naissance" aria-describedby="emailHelp" placeholder="Date de Naissance">
    <small id="emailHelp" class="form-text texterror"><?= $naissanceEr?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="emailHelp" placeholder="Entrer un numero">
    <small id="emailHelp" class="form-text texterror"><?= $contactEr?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Votre Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text texterror"><?= $emailEr?></small>
  </div>



  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">


  <div class="form-group has-error">
    <label for="exampleInputEmail1">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" aria-describedby="emailHelp" placeholder="Entrer ville">
    <small id="emailHelp" class="form-text texterror"><?= $villeEr?></small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Commune</label>
    <input type="text" class="form-control" id="commune" name="commune" aria-describedby="emailHelp" placeholder="Enter commune">
    <small id="emailHelp" class="form-text texterror"><?= $communeEr?></small>
  </div>


  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Etablissement</label>
    <input type="text" class="form-control" id="commune" name="etablissement" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text texterror"> </small>
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Commentaire</label>
    <input type="text" class="form-control" id="commune" name="commentaire" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text texterror"> </small>
  </div> -->
  <div class="form-group">
    <label for="exampleFormControlFile1">Chosir votre Photo</label>
    <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1" > 
    <small id="emailHelp" class="form-text texterror"><?= $photoEr?></small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    <small id="emailHelp" class="form-text texterror"><?= $passwordEr?></small>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmer votre password</label>
    <input type="password" class="form-control" name="confirm" id="exampleInputPassword1" placeholder="Password">
    <small id="emailHelp" class="form-text texterror"><?= $confirmEr?></small>
  </div>


  </div>
  </div>




  </div>
  <div class="card-footer">
  <button  style="" type="submit" name="submit" class="btn btn-primary btn-block">S'enregistrer</button>
 
  </div>
</div>
</form>

</div>
</div>

