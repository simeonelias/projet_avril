<style>
label{
    margin-left: 0px;
    color:
}
.texterror{
    color:red;
}
</style>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 offet-lg-3 offet-md-3 offset-sm-1 ">
<form action="" method="post">
<div class="card text-center">
  <div class="card-header">
   <h4>connexion</h4>
  </div>
  <div class="card-body">

 
   
    
  <small id="emailHelp" class="form-text texterror"><?= $error?></small>
  <div class="form-group">
    <label for="exampleInputEmail1">Votre Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text texterror"><?= $emailEr?></small>
  </div>

 <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    <small id="emailHelp" class="form-text texterror"><?= $passwordEr?></small>

  </div>

 
  </div>
  <div class="card-footer">
  <button  style=" width: 50% " type="submit" name="submit" class="btn btn-primary">S'enregistrer</button>
 
  </div>
</div>
</form>
</div>
</div>
