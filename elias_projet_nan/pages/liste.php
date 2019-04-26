<table class="table table-hover">
  <thead>
    <tr>

      <th scope="col">Nom</th>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Constructeur</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $maisons=getM();
    foreach ($maisons as $maison) {?>

 <tr class="table-default">
      <td><?= $maison->titre ?></td>
      <td><?= $maison->type ?></td>
      <td><?= $maison->description ?></td>
      <td><img style="height:80px" src="images/<?= $maison->image ?>" alt="<?= $maison->image ?>" srcset="">   </td>
      <td><?= $maison->nom ?></td>
      <td><button class="btn btn-info" type="button"><a style="color:azure" href="index.php?page=detail&id=<?= $maison->id ?>">Voir plus...</a></button>
</td>
  </tr>

     <?php 
    }
    ?>

  </tbody>
</table> 