<?php
require_once "../view/includes/header.php";
require_once "../view/includes/navbar.php";
?>
<form class="form-form">
  <div class="form-group">
    <label for="exampleInputEmail1">nom</label>
    <input type="text" class="form-control form-C" id="exampleInputEmail1" placeholder="nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prenom</label>
    <input type="text" class="form-control form-C" id="exampleInputPassword1" placeholder="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">numero</label>
    <input type="text" class="form-control form-C" id="exampleInputPassword1" placeholder="numero">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">date de naissance</label>
    <input type="text" class="form-control form-C" id="exampleInputPassword1" placeholder="date de naissance">
  </div>
 
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="submit" class="btn btn-danger">Annuler</button>
</form>