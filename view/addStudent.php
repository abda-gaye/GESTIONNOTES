<?php
    require_once "./includes/header.php";
    require_once "../models/Database.php";
    require_once "../models/Etudiant.php";
    $database = new Database();
    $db = $database->getConnection();
    $etudiant = new Etudiant($db);
    $resultats=$etudiant->afficherEtudiant();


?>
 
 <!--  -->
 <?php
    require_once "./includes/navbar.php";
?>
 <!--  -->
    <!-- table -->
<table class="table table-hover table-style">
<thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Numero</th>
            <th scope="col">date de naissance</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($resultats as $resultat){ ?>
        <tr>
          <td><?=$resultat["id"]?></td>
          <td><?=$resultat["nom"]?></td>
          <td><?=$resultat["prenom"]?></td>
          <td><?=$resultat["numero"]?></td>
          <td><?=$resultat["date_naissance"]?></td>
          <td>
            <button  class="btn btn-primary"><a href="#"></a>voir</button>
            <button class="btn"><a href="#"></a>modifier</button>
            <button class="btn btn-danger"><a href="#"></a>supprimer</button>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
</table>
<!-- table -->
<!-- bouton ajoute -->
    <button  class="btn btn-primary add-student"><a href="./formStudent.php">Ajouter Etudiants</a></button>
<!-- bouton ajoute -->
</body>
</html>