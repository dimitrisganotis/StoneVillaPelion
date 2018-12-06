<?php
  $title = "Location";
  $description = "All about our location.";
  $keywords = "Stone Villa Pelion, location, map, driving, directions";
  include_once('includes/header.php');
?>

<!-- =======================
          MAIN
======================== -->
<main id="main" class="animated fadeIn slow">
  <div class="column1_2">
    <section class="row">
      <h2>Our Address</h2>
      <address>Afissos,<br> South Pelion,<br> Volos,<br> Greece,<br> P.C: 37010</address>
    </section>

    <section class="row">
      <h2>Call us now</h2>
      <p><a class="call_mail" href="tel:306908497869">(+30) 690 8497869</a></p>
      <p><a class="call_mail" href="tel:306944886414">(+30) 694 4886414</a></p>
    </section>

    <section class="row">
      <h2>Nearest Airports</h2>
      <p>"Eleftherios Venizelos", Athens (ATH)</p>
      <p>"Makedonia", Thessaloniki (SKG)</p>
      <p>"Nea Anchialos", Volos (VOL)</p>
      <p>"Alexandros Papadiamantis", Skiathos (JSI)</p>
    </section>
  </div>

  <div class="column2_2">
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248820.22444764644!2d22.91084214949314!3d39.36174336792025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a7170c970648b7%3A0x7fa59458ec9ab1ec!2sStone+Villa+Pelion!5e0!3m2!1sel!2sgr!4v1533693166966" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <section class="row clear">
    <h2>Driving Directions</h2>
    <div class="column column1_3">
      <h3>Athens to Volos</h3>
      <p>From Athens airport you can drive to Volos via the E75 national route moving north.
        It is a 3 hours and 20 minutes tirp until you reach Volos with an optional stretch point near the city of Lamia.</p>
    </div>

    <div class="column column2_3">
      <h3>Thessaloniki to Volos</h3>
      <p>From Thessaloniki airport you can drive to Volos via the ring road A1 and E75 national route moving south. It is a 2 and a half hour tirp until you reach Volos with an optional stretch point at the village of Tempi.</p>
    </div>

    <div class="column column3_3">
      <h3>Volos to Afissos</h3>
      <p>Once in Volos you need 40 minutes driving to the village of Afissos in South Pelion.</p>
    </div>
  </section>
</main>

<?php include_once('includes/footer.php'); ?>
