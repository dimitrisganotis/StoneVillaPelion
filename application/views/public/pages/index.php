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
  <meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<title><?php echo $title; ?></title>

  <!-- Multilanguage -->
  <link rel="alternate" hreflang="en" href="http://www.stonevillapelion.gr/">
  <link rel="alternate" hreflang="el" href="http://www.stonevillapelion.gr/gr/">
  <link rel="alternate" hreflang="x-default" href="http://www.stonevillapelion.gr/">

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

  <?php
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$arrival = $day + 1;
		$departure = $day + 7;

		if($day>0 && $day<9)
			$arrival = '0'.$arrival;

		if($day>0 && $day<3)
			$departure = '0'.$departure;	
  ?>
  
</head>

<body id="homepage_body">

  <!-- start: Header -->
  <header id="header" style="background: none">
    <div id="header_logo">
      <h1><a href="<?php echo site_url(); ?>" title="Homepage">Stone Villa Pelion</a></h1>
    </div>

    <div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
  </header>
  <!-- end: Header -->

  <!-- start: Navigation -->
  <nav id="nav" style="background: none">
    <ul>
      <!--
      <li id="booking_btn" style="animation-delay: 0.0s;" class="animated bounceInLeft slow" onclick="toogleBooking()"><a <?php if($title == "Booking") echo 'id="active"'; ?> href="#booking">Booking</a></li>

      <div id="booking" class="animated fadeIn">
        <?php echo form_open('booking'); ?>
          <div class="form_border">
            <div class="input_field">
              <label for="arrival">ARRIVAL</label>
              <input id="arrival" type="date" name="arrival" placeholder="Enter Your Arrival Date" min="<?php echo date("Y-m-d"); ?>" style="font-size: 1.25em;" value="<?php echo $year.'-'.$month.'-'.$arrival; ?>" required>
            </div>
            <div class="input_field">
              <label for="departure">DEPARTURE</label>
              <input id="departure" type="date" name="departure" placeholder="Enter Your Departure Date" min="<?php echo date("Y-m-d"); ?>" style="font-size: 1.25em;" value="<?php echo $year.'-'.$month.'-'.$departure; ?>" required>
            </div>
            <div class="input_field small">
              <small>Maximum accommodtion is 6 people</small>
            </div>
            <input id="submit" name="submit" type="submit" value="CHECK AVAILABILITY" onclick="loading();">
          </div>
        </form>
      </div>
      -->

      <li style="animation-delay: 0.0s;" class="animated bounceInLeft slow"><a <?php if($title == "Booking") echo 'id="active"'; ?> href="/booking">Booking</a></li>
      <li style="animation-delay: 0.1s;" class="animated bounceInLeft slow"><a <?php if($title == "Location") echo 'id="active"'; ?> href="/location">Location</a></li>
      <li style="animation-delay: 0.2s;" class="animated bounceInLeft slow"><a <?php if($title == "Gallery") echo 'id="active"'; ?> href="/gallery">Gallery</a></li>
      <li style="animation-delay: 0.3s;" class="animated bounceInLeft slow"><a <?php if($title == "Info") echo 'id="active"'; ?> href="/info">Info</a></li>
      <li style="animation-delay: 0.4s;" class="animated bounceInLeft slow"><a <?php if($title == "Contact") echo 'id="active"'; ?> href="/contact">Contact</a></li>
    </ul>
  </nav>
  <!-- end: Navigation -->


  <!-- start: Footer -->
  <footer>
    <p style="color: whitesmoke">Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>
    <a style="color: whitesmoke" href="/gr">EN<span style="opacity:0.4;">/GR</span></a>
  </footer>
  <!-- end: Footer -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>
