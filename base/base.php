<?php

//configurando o ip dinâmico para servir arquivos estáticos
$ip = getHostByName(getHostName());
$base_url = "http://$ip:8000";
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
  <meta name="description" content="Site para treinos de basquete e comunidade." />
  <meta name="keywords" content="basquete, treinos, comunidade" />
  <meta name="author" content="Jackson Lorran" />




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
  <link rel="stylesheet" href=<?php echo "$base_url/static/css/base.css"?>/>
    <link rel="stylesheet" href=<?php echo "$base_url/static/css/index.css"?>/>

  <?php if (isset($extracss)) echo "<link rel='stylesheet' href=$base_url/static/css/$extracss/>"?>
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
