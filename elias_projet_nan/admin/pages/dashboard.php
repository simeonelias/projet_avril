adiministration ici
<?php
if(!$_SESSION['admin']){
header('location:index.php?page=login');
}else{
	?>



<div class="row">
	<div class="col-md-4 col-sm-12">
	<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
  
  <div class="card-body">
		<?php $nb=compteMaison() ?>
    <h4 class="card-title"><?= $nb?></h4>
    <p class="card-text">Articles publiés </p>
	</div>
	<div class="card-footer">
	<a class="btn btn-primary btn-block" href="index.php?page=liste">Voir</a>
	</div>
	</div>


</div>

	<div class="col-md-4 col-sm-12">
	<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
  
  <div class="card-body">
	<?php $nb=compteut() ?>

    <h4 class="card-title"><?= $nb?></h4>
    <p class="card-text">Utilisateurs inscrits</p>
	</div>
	<a class="btn btn-primary btn-block" href="index.php?page=register">Ajouter</a>

	</div>


</div>
	<div class="col-md-4 col-sm-12">
	<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
  
  <div class="card-body">
		<?php $nbre=compteCom()?>
    <h4 class="card-title"><?= $nbre?></h4>
    <p class="card-text">commentaires</p>
	</div>
	<a class="btn btn-primary btn-block" href=""></a>
	</div>


</div>
</div>

	<?php
}

?>


