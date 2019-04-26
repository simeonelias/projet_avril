<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="index.php">BatimPub</a>
  <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarColor01" aria-label="Toggle navigation" type="button" data-target="#navbarColor01" data-toggle="collapse">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=liste">liste</a>
      </li>


    </ul>





    <ul class="navbar-nav" >

    
    <?php 
    if(isset($_SESSION['id'])){
      ?>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Profile</a>
    <div class="dropdown-menu" style="left: 0px; top: 0px; position: absolute; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start">
      <a class="dropdown-item" href="index.php?page=dashbord&id=<?= $_SESSION['id']?>">Voir mon profile</a>
      <a class="dropdown-item" href="index.php?page=edit&id=<?= $_SESSION['id']?>">Modifier mon profile</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>

  <li class="nav-item">
        <a class="nav-link" href="index.php?page=deconnexion">Deconnexion</a>
      </li>

      <?php
    }else{
      ?>
      <li class="nav-item">
      <a class="nav-link" href="index.php?page=login">Se connecter</a>
      </li>
<!-- 
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=register">S'inscrire</a>
      </li> -->

      <?php
    }
    ?>


    </ul>

  </div>
</nav>