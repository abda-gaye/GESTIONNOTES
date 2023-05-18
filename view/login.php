<?php
$titre = "acceuil";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titre?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Formulaire de Connexion</title>

  <!-- CSS MDBootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdbootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdbootstrap/css/mdb.min.css">
  <link rel="stylesheet" href="../view/css/style.css">

  <!-- Scripts MDBootstrap -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdbootstrap/js/mdb.min.js"></script>
</head>

<body class="container-login">
  <div class="container ">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card card-height">
          <div class="card-body">
            <form>
              <p class="h4 text-center mb-4">Connexion</p>

              <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="phone" class="form-control">
                <label for="phone">Telephone</label>
              </div>

              <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="password" class="form-control">
                <label for="password">Mot de passe</label>
              </div>

              <div class="text-center">
                <button class="btn btn-primary"><a href="./addStudent.php">Se connecter</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center ">
    <p class="inscrire">pas inscris ? <a href="#!">s'inscrire</a></p>
    
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
