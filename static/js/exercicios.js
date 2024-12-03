document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById('videoModal');
  var btn = document.getElementById('openModalBtn');
  var span = document.getElementsByClassName('close')[0]; // Mudança aqui para pegar a classe correta
  var video = document.getElementById('youtubeVideo');

  btn.onclick = function () {
      modal.style.display = 'block';
      video.src += '?autoplay=1'; // Add autoplay to the video URL
  }

  span.onclick = function () {
      modal.style.display = 'none';
      video.src = video.src.replace('?autoplay=1', ''); // Remove autoplay from the video URL
  }

  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = 'none';
          video.src = video.src.replace('?autoplay=1', ''); // Remove autoplay from the video URL
      }
  }
});
