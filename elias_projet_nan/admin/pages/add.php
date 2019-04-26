<?php
if(!$_SESSION['admin']){
    header('location:admin/index.php?page=login');
}else{
    ?>

<style>
label{
    margin-left: 0px;
    color:
}
.texterror{
    color:red;
}
</style>

<form action="" method="post" enctype="multipart/form-data">
<div class="card text-center">
  <div class="card-header">
   <h4>Formulaire d'enregistrement</h4>
  </div>
  <div class="card-body">

  
<div class="row">

  <div class="col-lg-6 col-md-6 col-sm-12">

 
  <div class="form-group">
    <label for="exampleInputEmail1">Nom du produit</label>
    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Entrer nom">
    <small id="emailHelp" class="form-text texterror"><?= $nomEr?></small>
  </div>

  <div class="form-group">
      <label for="exampleSelect1">selectionne un type</label>
      <select class="form-control" name="type" id="exampleSelect1">
        <option>type</option>
        <option>Villa simple</option>
        <option>diplesse</option>
        <option>immeuble</option>

      </select>
    </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Chosir votre Photo</label>
    <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1" > 
    <small id="emailHelp" class="form-text texterror"><?= $photoEr?></small>
  </div>

  <div class="form-group">
      <label for="exampleTextarea">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" name="description" rows="3"></textarea>
      <small id="emailHelp" class="form-text texterror"><?= $descriptionEr?></small>
  </div>


  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">

image ici
  </div>
  </div>




  </div>
  <div class="card-footer">
  <button  style=" " type="submit" name="submit" class="btn btn-primary ">Menvoyer</button>
 
  </div>
</div>
</form>

</div>
</div>



    <?php
}




?>