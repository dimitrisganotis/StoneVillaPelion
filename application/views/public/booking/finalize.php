<!DOCTYPE html>
<!--
......................................
. Developed by:                      .
.                                    .
. Dimitrios Ganotis                  .
. https://github.com/dimitrisganotis .
. dimitrisgan97@gmail.com            .
......................................
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="index, follow">
  <meta name="keywords" content="<?php echo $metadata['keywords']; ?>">
	<meta name="description" content="<?php echo $metadata['description']; ?>">
	<title><?php echo $metadata['title']; ?></title>

  <!-- Favicon -->
	<link rel="icon" type="image/icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

  <!-- Fonts, Bootstrap, FontAwesome -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro"><!-- %7C -->
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- LightBox, Animate, Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lightbox.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

  <!-- start: Header -->
	<header id="header">
		<div id="header_logo">
			<h1><a href="<?php echo site_url(); ?>" title="Homepage">Stone Villa Pelion</a></h1>
		</div>

		<div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
	</header>
  <!-- end: Header -->

  <!-- start: Navigation -->
	<nav id="nav">
		<ul>
      <li style="animation-delay: 0.0s; margin-bottom: 4rem;" class="animated bounceInLeft slow"><a <?php if($title == "Covid-19") echo 'id="active"'; ?> href="<?php echo site_url('covid_19'); ?>">Covid-19</a></li>
			<li style="animation-delay: 0.2s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Booking") echo 'id="active"'; ?> href="/booking">Booking</a></li>
      <li style="animation-delay: 0.4s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Location") echo 'id="active"'; ?> href="/location">Location</a></li>
      <li style="animation-delay: 0.6s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Gallery") echo 'id="active"'; ?> href="/gallery">Gallery</a></li>
      <li style="animation-delay: 0.8s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Info") echo 'id="active"'; ?> href="/info">Info</a></li>
      <li style="animation-delay: 1.0s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Contact") echo 'id="active"'; ?> href="/contact">Contact</a></li>
		</ul>
	</nav>
  <!-- end: Navigation -->

  <!-- start: Main -->
  <main id="main_absolute" class="animated fadeIn slow">
    <div class="row" style="margin-bottom: 4rem; clear: both;">
      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block3_1 hide">
        <a style="color: grey" href="/booking">Select Dates</a>
      </div>

      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block3_2 hide">
        <a style="color: grey">Guests - Optional Services</a>
      </div>

      <div class="booking_blocks_of_3 block3_3">
        <a>Finalize Booking</a>
      </div>
    </div>

    <?php echo form_open('booking', 'id="form"'); ?>
      <div class="row" style="margin-bottom: 5rem; clear: both;">
        <div style="border: none" class="booking_blocks_of_3 block3_1">
          <p style="border-bottom: lightgrey 5px solid; padding-bottom: 5px; margin-bottom: 2rem;">Personal Data</p>

          <div style="text-align: left">
            <label style="margin-bottom: 5px" for="salutation" class="label">Salutation</label>
            <select style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em; padding: 0.25rem 0.5rem; border: black thin solid;" name="salutation" id="salutation">
              <option value="Mr">Mr</option>
              <option value="Ms">Ms</option>
            </select>

            <label style="margin-bottom: 5px" for="first_name" class="label">*First Name</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="first_name" name="first_name" placeholder="Entrer your first name" required>

            <label style="margin-bottom: 5px" for="last_name" class="label">*Last Name</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="last_name" name="last_name" placeholder="Entrer your last name" required>

            <label style="margin-bottom: 5px" for="email" class="label">*E-mail</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="email" id="email" name="email" placeholder="Entrer your email address" required>

            <label style="margin-bottom: 5px" for="phone" class="label">*Phone</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="phone" name="phone" placeholder="Entrer your phone number" required>
          </div>
        </div>

        <div style="border: none" class="booking_blocks_of_3 block3_2 margin-top">
          <p style="border-bottom: lightgrey 5px solid; padding-bottom: 5px; margin-bottom: 2rem;">Address</p>

          <div style="text-align: left">
            <label style="margin-bottom: 5px" for="street" class="label">Street</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="street" name="street" placeholder="Entrer your street name">

            <label style="margin-bottom: 5px" for="zip" class="label">Zip/Postal Code</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="zip" name="zip" placeholder="Entrer your zip/postal code">

            <label style="margin-bottom: 5px" for="city" class="label">City</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="city" name="city" placeholder="Entrer your city name">

            <label style="margin-bottom: 5px" for="country" class="label">Country</label>
            <input style="min-width: 100%; display: block; margin-bottom: 15px; text-align: left; font-size: 0.9em;" type="text" id="country" name="country" placeholder="Entrer your country name">
          </div>
        </div>

        <input type="hidden" name="check-in" value="<?php echo $dates['check-in']; ?>">
        <input type="hidden" name="check-out" value="<?php echo $dates['check-out']; ?>">
        <input type="hidden" name="guests" value="<?php echo $guests_and_services['guests']; ?>">
        <input type="hidden" name="crib" value="<?php if($guests_and_services['crib'] == "Yes") { echo $guests_and_services['crib']; } else { echo "No"; } ?>">
        <input type="hidden" name="pets" value="<?php if($guests_and_services['pets'] == "Yes") { echo $guests_and_services['pets']; } else { echo "No"; } ?>">
        <input type="hidden" name="laundry" value="<?php if($guests_and_services['laundry'] == "Yes") { echo $guests_and_services['laundry']; } else { echo "No"; } ?>">
        <input type="hidden" name="towels" value="<?php if($guests_and_services['towels'] == "Yes") { echo $guests_and_services['towels']; } else { echo "No"; } ?>">

        <div style="border-bottom: none;" class="booking_blocks_of_3 block3_3 margin">
          <div class="review">
            <p style="margin-bottom: 30px; text-align: center; font-size: 1.5em">Review your Request</p>

            <p style="margin-bottom: 10px;">Check-in: <b><?php echo $dates['check-in']; ?></b></p>
            <p style="margin-bottom: 20px;">Check-out: <b><?php echo $dates['check-out']; ?></b></p>

            <p style="margin-bottom: 20px;">Total Cost: <b><?php echo $total_cost.' &euro;'; ?></b></p>

            <p style="margin-bottom: 20px;">Guests: <b><?php echo $guests_and_services['guests']; ?></b></p>

            <p style="margin-bottom: 20px;">Optional Services:</b></p>

            <?php if($guests_and_services['crib'] == "Yes") { ?><p style="margin-bottom: 10px;"><b>Crib</b></p><?php } ?>
            <?php if($guests_and_services['pets'] == "Yes") { ?><p style="margin-bottom: 10px;"><b>Pet Bowls</b></p><?php } ?>
            <?php if($guests_and_services['laundry'] == "Yes") { ?><p style="margin-bottom: 10px;"><b>Laundry/Ironing Service</b></p><?php } ?>
            <?php if($guests_and_services['towels'] == "Yes") { ?><p style="margin-bottom: 10px;"><b>Beach Towels</b></p><?php } ?>
            <?php if($guests_and_services['crib'] != "Yes" && $guests_and_services['pets'] != "Yes" && $guests_and_services['laundry'] != "Yes" && $guests_and_services['towels'] != "Yes") { ?><p style="margin-bottom: 10px;"><b>None</b></p><?php } ?>

            <br>

            <div style="text-align: center;">
              <button id="form-btn" style="border: white thin solid; color: white; background: none; padding: 10px; cursor: pointer; font-size: 1.1em">SEND REQUEST</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </main>
  <!-- end: Main -->

   <!-- start: Footer -->
   <footer>
    <p>Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>

    <a href="<?php echo site_url('gr/booking'); ?>">EN<span style="opacity:0.4;">/GR</span></a>
  </footer>
  <!-- end: Footer -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>

  <script>
    $(document).ready(function(){
      $("#form").submit(function(){
          $('#form-btn').css('cursor', "wait");
          document.getElementById("form-btn").disabled = true;
          $('.fa-spin').css('display', "inherit");
      });
    });
  </script>

  <script>
    function myFunctionX(x) {
      if (x.matches) { // If media query matches
        main.id = "main";
      } else {
        main.id = "main_absolute";
      }
    }

    function myFunctionY(y) {
      if (y.matches) { // If media query matches
        main.id = "main";
      } else {
        main.id = "main_absolute";
      }
    }

    var main = document.getElementById("main_absolute");
    var x = window.matchMedia("(max-width: 860px)");
    var y = window.matchMedia("(max-height: 1025px)");
    myFunctionX(x) // Call listener function at run time
    x.addListener(myFunctionX) // Attach listener function on state changes
    myFunctionY(y) // Call listener function at run time
    y.addListener(myFunctionY) // Attach listener function on state changes
  </script>

</body>
</html>
