<?php

require "public/src/connection.php";
require "public/repository/AtualizacoesRepository.php";
require "public/repository/ProgramasRepository.php";

$atualizacoes_repository = new AtualizacoesRepository($pdo);
$programas_repository = new ProgramasRepository($pdo);

$atualizacoes =  $atualizacoes_repository -> getAll();
$programas =  $programas_repository -> getAll();


?>
<!doctype html>
<html lang="pt-BR">

<head>
  <title>Ballers085</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <meta name="description" content="Site para treinos de basquete e comunidade." />
  <meta name="keywords" content="basquete, treinos, comunidade" />
  <meta name="author" content="Jackson Lorran" />

  <!-- Open Graph -->
  <meta property="og:title" content="Ballers085" />
  <meta property="og:description" content="Site para treinos de basquete e comunidade." />
  <meta property="og:url" content="https://ballers085-3bab2862ad19.herokuapp.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://localhost:8000/static/imgs/logo.png" />

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@username" />
  <meta name="twitter:title" content="Ballers085" />
  <meta name="twitter:description" content="Site para treinos de basquete e comunidade." />
  <meta name="twitter:image" content="http://localhost:8000/static/imgs/logo.png" />

  <!-- Meta tags para PWA -->
  <meta name="theme-color" content="#000" />
  <meta name="background-color" content="#000" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="apple-mobile-web-app-title" content="ballers085" />

  <!-- Ícones -->
  <link rel="apple-touch-icon" sizes="180x180" href="https://localhost:8000/static/imgs/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="icon" type="image/png" sizes="192x192" href="imgs/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="512x512" href="imgs/android-chrome-512x512.png" />
  <link rel="stylesheet" href="http://localhost:8000/static/css/base.css" />
  <link rel="stylesheet" href="http://localhost:8000/static/css/index.css" />
</head>

<body class="bg-dark text-light">
  <header>
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="http://localhost:8000/static/imgs/logo.png" class="img-fluid rounded-top" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="bi bi-list bg-white"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ballers085</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main id="main" class="container-sm main d-flex">
    
    <h1 class="mt-2">Treinos por categoria</h1>
    <div class="cards">
      <?php foreach ($programas as $obj): ?>
        <a href="treinos_categoria_academia.html">
            <div class="card">
              <img src="http://localhost:8000/static/imgs/gifs/academia.gif" class="card-img-top" alt="Treino de costas" />
              <h5 class="card-header text-center"><?php echo $obj["titulo"] ?></h5>
            </div>
          </a>
    <?php endforeach; ?>
      
    </div>

    <div class="contribuicao mt-4">
        <h2>Contribua com o projeto</h2>
        <p>Se você gostou do projeto e quer contribuir clique no link abaixo.</p>
        <a href="https://nubank.com.br/cobrar/11encl/6699997a-72c7-4fa7-b3f9-a7699208343f" class="btn btn-info text-dark">Contribuir☕</a>
    </div>
    
    <div class="atualizacoes mt-4 mb-5">
        <h2>Atualizações</h2>
        <div class="cards_atualizacoes">
            <?php foreach ($atualizacoes as $obj): ?>
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $obj["titulo"]?></h5>
                      <p class="card-text">
                      <?php
                      if(str_contains( $obj["descricao"],";")){
                        $arr = explode(";", $obj["descricao"]);
                        foreach ($arr as $text){
                          echo "- $text<br>";
                        }
                      }
                      else{
                        echo "- ".$obj["descricao"];
                      }
                      ?>
                      </p>
                  </div>
              </div>
              <?php endforeach; ?>
        </div>
    </div>
    
  </main>

  

  <footer class="container-fluid text-white footer text-center">
    <p>&copy; 2024 - Ballers085 | <a class="text-instagram" target="_blank" href="https://www.instagram.com/imdevjack/">Instagram</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
