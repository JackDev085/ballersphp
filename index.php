<?php
require "src/connection.php";
require "src/repository/AtualizacoesRepository.php";
require "src/repository/ProgramasRepository.php";

$atualizacoes_repository = new AtualizacoesRepository($pdo);
$programas_repository = new ProgramasRepository($pdo);

$atualizacoes =  $atualizacoes_repository -> getAll();
$programas =  $programas_repository -> getAll();
ob_start();
?>
<main id="main" class="container-sm main d-flex">
    
    <h1 class="mt-2">Treinos por categoria</h1>
    <div class="cards">
      <?php foreach ($programas as $obj): ?>
      
        <a href="treinos.php?categoria=<?php echo $obj["link_direcionamento"] ?>">
            <div class="card">
              <img src="<?php echo$base_url?>/static/imgs/gifs/<?php echo $obj["link_foto"]?>" class="card-img-top" alt="Treino de costas" />
              <h5 class="card-header text-center"><?php echo $obj["titulo"] ?></h5>
            </div>
          </a>
    <?php endforeach; ?>
      
    </div>

    <div class="contribuicao mt-4">
        <h2>Contribua conm o projeto</h2>
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
<?php 
$content = ob_get_clean();
include "base/base.php";
?>
