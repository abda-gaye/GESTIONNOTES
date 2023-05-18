<?php
    require_once "./includes/header.php";
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
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Numero</th>
            <th scope="col">date de naissance</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ndiaye</td>
          <td>Fadal</td>
          <td>10</td>
          <td>18-11-1998</td>
          <td>
            <button  class="btn btn-primary"><a href="#"></a>voir</button>
            <button class="btn"><a href="#"></a>modifier</button>
            <button class="btn btn-danger"><a href="#"></a>supprimer</button>
          </td>
        </tr>
        <tr>
          <td>Sagna</td>
          <td>Moussa</td>
          <td>130</td>
          <td>20-02-2000</td>
          <td>
            <button  class="btn btn-primary"><a href="#"></a>voir</button>
            <button class="btn"><a href="#"></a>modifier</button>
            <button class="btn btn-danger"><a href="#"></a>supprimer</button>
          </td>
        </tr>
        <tr>
          <td>Doucoure</td>
          <td>Mohamed</td>
          <td>1</td>
          <td>11-12-2003</td>
          <td>
            <button  class="btn btn-primary"><a href="#"></a>voir</button>
            <button class="btn "><a href="#"></a>modifier</button>
            <button class="btn btn-danger"><a href="#"></a>supprimer</button>
          </td>
        </tr>
      </tbody>
</table>
<!-- table -->
<!-- bouton ajoute -->
    <button  class="btn btn-primary add-student"><a href="./formStudent.php">Ajouter Etudiants</a></button>
<!-- bouton ajoute -->
</body>
</html>