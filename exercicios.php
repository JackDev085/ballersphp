<?php

$title="Exercicios";
$extracss = "exercicios.css";

require "src/connection.php";
require "src/repository/ExerciciosRepository.php";

$exercicios_repository = new ExerciciosRepository($pdo);


$exercicios = $exercicios_repository->getExerciciosPeloIdTreino($_GET["treino_id"]);
$treino_id = $_GET['treino_id'] ?? '';
ob_start();

?>
  <h1 class="text-center">Nome do Treino</h1>

  <!-- cards -->
    <div class="cards_exercicio d-flex flex-wrap-wrap mt-4 mb-1">
      <?php foreach ($exercicios as $exercicio): ?>
        <div class="card mb-3 bg-transparent text-light border-1 border-white text-center" style="width:96%">
          <div class="card-body">
            <h5 class="card-title"><?php echo $exercicio["nome"]?></h5>
            <p class="card-text font-weight-light"><?php echo $exercicio["repeticoes"]?></p>
            <button type="button" class="btn btn-primary openModalBtn" data-toggle="modal" data-target="#videoModal"
              data-video=<?php echo $exercicio["link"]?> data-title=<?php echo $exercicio["nome"]?>>
              Assistir Vídeo
            </button>
          </div>
        </div>
      <?php endforeach; ?>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe id="youtubeVideo" width="100%" height="315" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var modal = document.getElementById('videoModal');
      var video = document.getElementById('youtubeVideo');
      var videoTitle = document.getElementById('videoModalLabel');

      document.querySelectorAll('.openModalBtn').forEach(function (btn) {
        btn.onclick = function () {
          var videoSrc = 'https://www.youtube.com/embed/' + this.getAttribute('data-video');
          var videoTitleText = this.getAttribute('data-title');
          video.src = videoSrc + '?autoplay=1'; // Add autoplay to the video URL
          videoTitle.innerText = videoTtleText; // Set the title of the modal
        }
      });

      $('#videoModal').on('hide.bs.modal', function () {
        video.src = ''; // Clear the video URL
      });

      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = 'none';
          video.src = ''; // Clear the video URL
        }
      }
    });
  </script>
<?php
$content = ob_get_clean();
include "base/base.php";

?>