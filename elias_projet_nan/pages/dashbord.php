<?php
if($_SESSION['id']){


$id=$_GET['id'];
 $requete = $db->prepare("SELECT * FROM utilisateur WHERE id=?");
 $requete->execute([$id]);
 $data= $requete->fetchObject();

?>


<br>
<center>
<div class="card text-white bg-secondary mb-3" style="width:50rem; margin:10px; padding:1px;">

  <div class="card-body">
    <h6 class="card-subtitle text-muted"><H4>Bienvenue <?=$data->prenom?></H4></h6>
  </div>
  <img class="img rounded-circle" style="margin:auto; width: 40rem; display: block;" alt="Card image" src="images/<?=$data->photo?>">
 
  <div class="card-body">

  <div class="row" style="margin:auto;">
  <div class="col-lg-5 col-md-5 col-sm-12">


    <h5>nom: <?=$data->nom?></h5>
    <h5>prenom: <?=$data->prenom?></h5>
    <h5>Email: <?=$data->email?></h5>
    <h5>Ville: <?=$data->ville?></h5>
    <h5>Commune: <?=$data->commune?></h5>
    <h5>Numero: <?=$data->contact?></h5>


  </div>

  <div class="col-lg-3 col-md-3 col-sm-12">
    <div style="height:; height:100px; background-color:chocolate; margin:6px">
    <h4>Nombre de Publication 10</h4>
  <button> <a href="index.php?page=add&id=<?=$data->id?>">Ajouter une construction</a>  </button>
    </div>
  </div> <!-- fin deuxieme colonne -->
  <div class="col-lg-3 col-md-3 col-sm-12">
    <div style="width:100%; background-color:chocolate; margin:6px">
    <h4>Nombre de Publication 05</h4>
  <button> <a href="index.php?page=add&id=<?=$data->id?>">Ajouter une construction</a>  </button>
    </div>
  </div> <!-- fin troisieme  colonne -->

  </div>

  </div>
  <div class="card-footer ">
<button class="btn btn-primary btn-block" type="button"><a style="color:azure" href="index.php?page=edit&id=<?=$data->id?>">modifier mes informations</a> </button>


  </div>
</div>

</center>

<?php
}else{
    header('location:index.php?page=login');
}
?>
