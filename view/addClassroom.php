<?php
require_once "../view/includes/header.php";
require_once "../view/includes/navbar.php";
require_once "../models/Database.php";
require_once "../models/Classe.php";
$database = new Database();
$db = $database->getConnection();
$classe = new Classe($db);
$resultats=$classe->afficherClasse();
?>

<table class="table table-hover table-style">
<thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Libelle</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($resultats as $resultat) {?>
          <td><?= $resultat["id"] ?></td>
          <td><?= $resultat["libelle"] ?></td>
          <td>
            <button  class="btn btn-primary"><a href="#"></a>voir</button>
            <button class="btn"><a href="#"></a>modifier</button>
            <button class="btn btn-danger"><a href="#"></a>supprimer</button>
          </td>
        </tr>
        <?php } ?>
      </tbody>
</table>
<!-- table -->
<!-- bouton ajoute -->
    <button  class="btn btn-primary add-student"><a href="../view/formClassroom.php">Ajouter Classe</a></button>
<!-- bouton ajoute -->
