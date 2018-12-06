<!-- =======================
          FOOTER
======================== -->
<footer>
  <p>Stone Villa Pelion &copy 2018</p>
  <a href="/gr/<?php
    switch ($title) {
      case 'Request Booking':
        echo 'booking';
        break;
      case 'Location':
        echo 'location';
        break;
      case 'Gallery':
        echo 'gallery';
        break;
      case 'Info':
        echo 'info';
        break;
      case 'Contact':
        echo 'contact';
        break;
      default:
        echo 'index';
        break;
    }
  ?>.php">EN<span style="opacity:0.4;">/GR</span></a>
</footer>

</body>

</html>
