<?php

// Configurando o IP dinâmico para servir arquivos estáticos
//$ip = '192.168.100.52';
//$base_url = "http://$ip"; // Definindo a URL base sem barra final

?>
<!doctype html>
<html lang="pt-BR">

<head>

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
  
  <!-- Remover a barra extra no final do $base_url para que a URL seja correta -->
  <link rel="stylesheet" href="/static/css/base.css" />
  <link rel="stylesheet" href="/static/css/index.css" />

  <?php if (isset($extracss)) echo "<link rel='stylesheet' href='/static/css/$extracss'>" ?>
  <title><?php echo $title ?? 'Minha Página'; ?></title>

</head>

<body class="bg-dark body text-light pb-1">
  <?php include "header.php"; ?>

  <main id="main" class="container-sm main d-flex mb-5">
    <?php if (isset($content)) echo $content; ?>
  </main>
  
  <?php include "footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>
