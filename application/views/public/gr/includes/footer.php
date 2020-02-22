<!-- start: Footer -->
<footer>
  <p>Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>

  <a href="/<?php
    switch ($title) {
      case 'Κράτηση':
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
  ?>"><span style="opacity:0.4;">EN/</span>GR</a>
</footer>
<!-- end: Footer -->

<script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>
