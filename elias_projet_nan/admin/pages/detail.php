<?php
require '../functions/detail.func.php';


?>
<center>
<div class="card mb-3" style="width:40rem">
  <?php $maison=getM() ?>

  <div class="card-body">
    <h3 class="card-title"><?= $maison->nom ?></h3>
    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
  </div>
  <img style="height: 400px; width: 100%; display: block;" alt="Card image" src="../images/<?= $maison->image ?>">
 
  <div class="card-body">
    <h6 class="card-subtitle text-muted"><?= $maison->description ?></h6>
  </div>
  <div class="card-footer ">
<center>
<button class="btn btn-primary" type="button"><a style="color:azure" href="#commenter">commenter</a> </button>

<button class="btn btn-warning" type="button"><a style="color:azure" href="index.php?page=edit&id=<?= $maison->id ?>">Modifier</a> </button>

<button class="btn btn-danger" type="button"><a style="color:azure" href="index.php?page=delete&id=<?= $maison->id ?>">Suprimer</a></button>
</center>
  </div>
</div>

</center>
<hr><hr class="my-4">























