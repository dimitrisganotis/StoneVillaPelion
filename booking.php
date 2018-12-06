<?php
  $title = "Request Booking";
  $description = "Request booking at Stone Villa Pelion and we will get in touch with you as soon as possible.";
  $keywords = "Stone Villa Pelion, booking, availability, calendar";
  include_once('includes/header.php');
?>

<!-- =======================
          MAIN
======================== -->
<main id="main" class="animated fadeIn slow">
  <?php  if (isset($_GET['msg'])) echo '<p style="color:red; text-align: center; font-size: 1.4em; margin-bottom: 2em;"><b>'.$_GET['msg'].'</b></p>'; ?>
  <a style="text-decoration: none; text-align: right; display: block; color: black; font-size: 1.1em" href="/calendar.php" target="_blank">Check our calendar <b>here!</b></a>
  <form class="form" action="/php/send-email.php" method="post">
    <div class="input_field">
      <label for="full_name">Full Name*</label>
      <input id="full_name" type="text" name="full_name" placeholder="Enter Your Name" pattern=".{2,}" title="At least 2 characters" required>
    </div>
    <div class="input_field">
      <label for="email">Email*</label>
      <input id="email" type="email" name="email" placeholder="Enter Your Email" required>
    </div>
    <div class="input_field">
      <label for="phone">Phone</label>
      <input id="phone" type="text" name="phone" placeholder="Enter Your Phone Number">
    </div>
    <div class="input_field">
      <label for="guests_number">Number of Guests*</label>
      <input id="guests_number" type="number" name="guests_number" placeholder="Enter Number of Guests" min="1" max="8" required>
    </div>
    <div class="input_field">
      <label for="arrival">Arrival*</label>
      <input id="arrival" type="date" name="arrival" placeholder="Enter Your Arrival Date" style="font-size: 1.25em;" required>
    </div>
    <div class="input_field">
      <label for="departure">Departure*</label>
      <input id="departure" type="date" name="departure" placeholder="Enter Your Departure Date" style="font-size: 1.25em;" required>
    </div>
    <div class="input_field input_textarea">
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Enter Your Message Here...">I'm interested in booking the apartment for the above dates. Please contact me for the availability.</textarea>
    </div>
    <input id="submit" name="submit" type="submit" value="Submit" onclick="loading();">
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

<?php include_once('includes/footer.php'); ?>
