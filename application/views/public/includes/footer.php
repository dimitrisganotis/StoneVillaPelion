<!-- start: Footer -->
<footer>
  <p>Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>

  <a href="/gr/<?php
    switch ($title) {
      case 'Covid-19':
        echo 'covid_19';
        break;
      case 'Booking':
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
  ?>">EN<span style="opacity:0.4;">/GR</span></a>
</footer>
<!-- end: Footer -->

<script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>
