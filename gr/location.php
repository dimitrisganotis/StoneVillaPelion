<?php
  $title = "Τοποθεσία";
  $description = "All about our location.";
  $keywords = "Stone Villa Pelion, τοποθεσία, χάρτης, οδήγηση, κατευθύνσεις";
  include_once('../includes/gr/header.php');
?>

<!-- =======================
          MAIN
======================== -->
<main id="main" class="animated fadeIn slow">
  <div class="column1_2">
    <section class="row">
      <h2>Η διεύθυνσή μας</h2>
      <address>Άφυσσος,<br> Νότιο Πήλιο,<br> Βόλος,<br> Ελλάδα,<br> Τ.Κ: 37010</address>
    </section>

    <section class="row">
      <h2>Καλέστε μας τώρα</h2>
      <p><a class="call_mail" href="tel:306908497869">(+30) 690 8497869</a></p>
      <p><a class="call_mail" href="tel:306944886414">(+30) 694 4886414</a></p>
    </section>

    <section class="row">
      <h2>Κοντινότερα Αεροδρόμια</h2>
      <p>"Ελευθέριος Βενιζέλος", Αθήνα (ATH)</p>
      <p>"Μακεδονία", Θεσσαλονίκη (SKG)</p>
      <p>"Νέα Αγχιάλος", Βόλος (VOL)</p>
      <p>"Αλέξανδρος Παπαδιαμάντης", Σκιάθος (JSI)</p>
    </section>
  </div>

  <div class="column2_2">
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248820.22444764644!2d22.91084214949314!3d39.36174336792025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a7170c970648b7%3A0x7fa59458ec9ab1ec!2sStone+Villa+Pelion!5e0!3m2!1sel!2sgr!4v1533693166966" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <section class="row clear">
    <h2>Οδηγίες Οδήγησης</h2>
    <div class="column column1_3">
      <h3>Αθήνα προς Βόλο</h3>
      <p>Από το αεροδρόμιο της Αθήνας μπορείτε το μεταβείτε στο Βόλο μέσω της εθνικής οδού Ε75 που κατευθύνεται βόρεια της χώρας. Το ταξίδι διαρκεί γύρω στις 3 ώρες και 20 λεπτά μέχρι το Βόλο με προαιρετική στάση για ξεκούραση κοντά στη Λαμία.</p>
    </div>

    <div class="column column2_3">
      <h3>Θεσσαλονίκη προς Βόλο</h3>
      <p>Από το αεροδρόμιο της Θεσσαλονίκης μπορείτε να μεταβείτε στο Βόλο μέσω της περιφερειακής οδού Α1 και της εθνικής οδού Ε75 που κατευθύνεται νότια της χώρας. Το ταξίδι διαρκεί γύρω στις 2 και μισή ώρα μέχρι το Βόλο με προαιρετική στάση για ξεκούραση στα Τέμπη.</p>
    </div>

    <div class="column column3_3">
      <h3>Βόλος προς Άφυσσο</h3>
      <p>Μόλις φτάσετε στο Βόλο χρειάζεστε 40 λεπτά οδήγησης μέχρι το χωριό Άφυσσος στο Νότιο Πήλιο.</p>
    </div>
  </section>
</main>

<?php include_once('../includes/gr/footer.php'); ?>
