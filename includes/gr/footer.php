<!-- =======================
          FOOTER
======================== -->
<footer>
  <p>Stone Villa Pelion &copy 2018</p>
  <a href="../<?php
    switch ($title) {
      case 'Αίτηση Κράτησης':
        echo 'booking';
        break;
      case 'Τοποθεσία':
        echo 'location';
        break;
      case 'Φωτογραφίες':
        echo 'gallery';
        break;
      case 'Πληροφορίες':
        echo 'info';
        break;
      case 'Επικοινωνία':
        echo 'contact';
        break;
      default:
        echo 'index';
        break;
    }
  ?>.php"><span style="opacity:0.4;">EN/</span>GR</a>
</footer>

</body>

</html>
