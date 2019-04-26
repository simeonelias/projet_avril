<nav class="navbar navbar-expand-lg navbar-dark bg-secondary" >
  <a class="navbar-brand" href="#">ADMINISTRATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01" style="margin-buttom:10px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <php <?php echo ($page=="home") ? "active" : "" ?> ;?>">
        <a class="nav-link" href="index.php?page=dashboard"><span class="glyphicon glyphicon-th-large"></span>Accueil<span class="sr-only">(current)</span></a>
      </li>


 


    </ul>

<ul>
<?php if(isset($_SESSION['admin'])){?>

      <li class="nav-item">
        <a style="color:red;font-weight:bold" class="nav-link" href="index.php?page=deconnexion">Se deconnecter</a>
      </li>
  <?php
} ?>


</ul>
  </div>
</nav>