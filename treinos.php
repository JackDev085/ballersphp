<?php

$title = "Treinos";
$extracss = "treinos.css";

require "src/connection.php";
require "src/repository/TreinosRepository.php";

$treinos_repository = new TreinosRepository($pdo);

$treinos = $treinos_repository->getAll();
$categoria = $_GET['categoria'] ?? '';
ob_start();

?>

<!-- Adicione estilos CSS -->
<link rel="stylesheet" href="css/treinos.css" />

<h1 class="mt-2">Treinos de <?php echo htmlspecialchars($categoria); ?></h1>

<div class="cards d-flex mt-5">
  <?php foreach ($treinos as $treino):?>
    <?php if ($treino['categoria'] !== $categoria) continue; ?>
  <div class="card">
    <img
      src="https://i.ytimg.com/vi/<?php echo htmlspecialchars($treino['link_video_treino']); ?>/hqdefault.jpg"
      class="card-img-top"
      alt="Capa do treino"
    />
    <div class="card-body">
      <h5 class="card-title"><?php echo htmlspecialchars($treino['nome']); ?></h5>
      <p class="card-text"><strong>Duração:</strong> <?php echo htmlspecialchars($treino['duracao']); ?></p>
      <p class="card-text"><strong>Envio:</strong> <?php echo htmlspecialchars($treino['data_criacao']); ?></p>
      <p class="card-text"><strong>Descriçao:</strong> <?php echo htmlspecialchars($treino['descricao']); ?></p>
      <a
        href="exercicios.php?treino_id=<?php echo $treino['id']; ?>"
        class="btn btn-primary mt-2"
        >Ver treino</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<?php

$content = ob_get_clean();
include "base/base.php";
?>