<?php
  $title = "Αίτηση Κράτησης";
  $description = "Υποβάλετε αίτηση κράτησης στο Stone Villa Pelion και θα επικοινωνήσουμε μαζί σας όσο το δυνατόν συντομότερα.";
  $keywords = "Stone Villa Pelion, κράτηση, διαθεσιμότητα, ημερολόγιο";
  include_once('../includes/gr/header.php');
?>

<!-- =======================
          MAIN
======================== -->
<main id="main" class="animated fadeIn slow">
  <?php  if (isset($_GET['msg'])) echo '<p style="color:red; text-align: center; font-size: 1.4em; margin-bottom: 2em;"><b>'.$_GET['msg'].'</b></p>'; ?>
  <a style="text-decoration: none; text-align: right; display: block; color: black; font-size: 1.1em" href="/calendar.php" target="_blank">Ελέγξτε το ημερολόγιο μας <b>εδώ!</b></a>
  <form class="form" action="../php/send-email-gr.php" method="post">
    <div class="input_field">
      <label for="full_name">Πλήρες Όνομα*</label>
      <input id="full_name" type="text" name="full_name" placeholder="Συμπληρώστε Το Όνομα Σας" pattern=".{2,}" title="Τουλάχιστον 2 χαρακτήρες" required>
    </div>
    <div class="input_field">
      <label for="email">Email*</label>
      <input id="email" type="email" name="email" placeholder="Συμπληρώστε Το Email Σας" required>
    </div>
    <div class="input_field">
      <label for="phone">Τηλέφωνο</label>
      <input id="phone" type="text" name="phone" placeholder="Συμπληρώστε Τον Τηλεφωνικό Σας Αριθμό ">
    </div>
    <div class="input_field">
      <label for="guests_number">Αριθμός Επισκεπτών*</label>
      <input id="guests_number" type="number" name="guests_number" placeholder="Συμπληρώστε Τον Αριθμό Επισκεπτών" min="1" max="8" required>
    </div>
    <div class="input_field">
      <label for="arrival">Άφιξη*</label>
      <input id="arrival" type="date" name="arrival" placeholder="Συμπληρώστε Την Ημερομηνία Άφιξης" style="font-size: 1.25em;" required>
    </div>
    <div class="input_field">
      <label for="departure">Αναχώρηση*</label>
      <input id="departure" type="date" name="departure" placeholder="Συμπληρώστε Την Ημερομηνία Αναχώρησης" style="font-size: 1.25em;" required>
    </div>
    <div class="input_field input_textarea">
      <label for="message">Μήνυμα</label>
      <textarea id="message" name="message" placeholder="Συμπληρώστε Το Μήνυμα Σας Εδώ...">Ενδιαφέρομαι να κάνω κράτηση του διαμερίσματος για τις παραπάνω ημερομηνίες. Παρακαλώ επικοινωνήστε μαζί μου για την διαθεσιμότητα.</textarea>
    </div>
    <input id="submit" name="submit" type="submit" value="Υποβολή" onclick="loading();">
  </form>
</main>

<script type="text/javascript">
  function loading() {
    let full_name = document.getElementById('full_name');
    let email = document.getElementById('email');
    let phone = document.getElementById('Phone');
    let guests_number = document.getElementById('guests_number');
    let arrival = document.getElementById('arrival');
    let departure = document.getElementById('departure');
    let message = document.getElementById('message');

    //form validation for empty fields
    if(full_name == null || email == null || guests_number == null || arrival == null || departure == null) {
      return;
    }

    //email validation
    let email_value = email.value;
    let ampersatPos = email_value.indexOf("@");
    let dotPos = email_value.indexOf(".");
    let dotPosAfterAmpersat = email_value.indexOf(".", ampersatPos);

    if (ampersatPos <= 0)
        return;
    if (dotPos < 0)
        return;
    if (dotPosAfterAmpersat-ampersatPos == 1)
        return;
    if (email_value.indexOf(".") == 0 || email_value.lastIndexOf(".") == email_value.length-1)
        return;

    //guests_number validation
    let guests_number_value = guests_number.value;

    if(guests_number_value > 8)
      return;

    //add spinner gif to main
    let main = document.getElementById("main")
    let div = document.createElement("div");
    let image = document.createElement("img");
    image.setAttribute("src", "/images/spinner.gif");
    image.setAttribute("class", "spinner");
    div.setAttribute("class", "spinner_container");
    div.appendChild(image);
    main.appendChild(div);
  }
</script>

<?php include_once('../includes/gr/footer.php'); ?>
