  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- jQuery -->

  <script>
    var isTruncated = true;

    function toggleTruncate(cardNumber) {
      var truncatableText = document.getElementById('truncatableText' + cardNumber);
      var icon = document.getElementById('arrow' + cardNumber);

      if (truncatableText.classList.contains('custom-truncate')) {
        truncatableText.classList.remove('custom-truncate');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
      } else {
        truncatableText.classList.add('custom-truncate');
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel();
    });
  </script>
  <!-- Template Javascript -->
  <script src="js/main.js"></script>