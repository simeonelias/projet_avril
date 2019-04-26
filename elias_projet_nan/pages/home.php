<!-- <img src="publics/img/al3.jpg" alt="img" srcset=""> -->
<div class="jumbotron_section">
<div class="jumbotron">
  <h1 class="display-3">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" role="button" href="#">Learn more</a>
  </p>
</div>
</div>


<br>

<!-- objectif -->

<div class="jumbotron" style="color:black">
<span class="categorie_titre"> Nos objectifs</span>
<blockquote class="blockquote text-center">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
  </p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>





<!-- categories -->

<section class="categorie" id="categ">
<span class="categorie_titre"> Les catégories de maison </span>
<div class="row">

 	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="cat1">
		<img src="publics/img/FB_IMG_1554859269808.jpg" class="img-fluid cat_img" style="width: 100%; height: 250px; border-radius: 2%;">
		<h2>villa diplesse</h2>
		<p>description de la chambre Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="cat2">
		<img src="publics/img/FB_IMG_1554859199013.jpg"  class="img-fluid cat_img" style="width: 100%; height: 250px; border-radius: 2%;">
		<h2>maison 3D Américainne</h2>
		<p>description de la chambre Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="cat3">
		<img src="publics/img/FB_IMG_1554859454819.jpg"  class="img-fluid cat_img" style="width: 100%; height: 250px; border-radius: 2%;">
		<h2>villa familliale</h2>
		<p>description de la chambre Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	</div>
	</div>
	
</div>

</section>

<!-- fin categories -->




<div class="comment" style=" background-color: rgb(220, 241, 241);">
<span class="categorie_titre"> Envoyez-nous un message </span>

<div class="card text-center border-light" id="commenter"style="max-width:50rem; margin:auto auto;">
  <div class="card-header">
   <h4>Commenter</h4>
  </div>
  <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Entrer nom">
    <small id="emailHelp" class="form-text texterror"></small>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer email">
    <small id="emailHelp" class="form-text texterror"></small>
  </div>


  <div class="form-group">
      <label for="exampleTextarea">Votre commentaire ici</label>
      <textarea class="form-control" id="exampleTextarea" name="commentaire" rows="3"></textarea>
      <small id="emailHelp" class="form-text texterror"></small>
  </div>
  <small id="emailHelp" class="form-text texterror"></small>
  </div>
  <div class="card-footer">
  <button  style=" " type="submit" name="submit" class="btn btn-primary btn-block ">envoyer</button>
 </form>
  </div>
</div>
</div>
