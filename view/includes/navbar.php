   <!-- navbar -->
   <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost:8000/view/addStudent.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:8000/view/addStudent.php">Gestion Etudiants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:8000/view/addClassroom.php">Gestion classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:8000/view/addNiveau.php">Gestion niveaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:8000/view/addYear.php">Gestion annees</a>
        </li>
      </ul>
      <form class="f" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">recherche</button>
      </form>
      <button type="button" class="btn btn-danger btn-logout"><a href="http://localhost:8000/view/login.php?">deconnexion</a></button>
    </div>
  </div>
</nav>
    <!-- navbar -->