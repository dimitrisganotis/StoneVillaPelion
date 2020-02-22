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
			<li style="animation-delay: 0.0s;" class="animated bounceInLeft slow"><a <?php if($title == "Booking") echo 'id="active"'; ?> href="/booking">Booking</a></li>
      <li style="animation-delay: 0.2s;" class="animated bounceInLeft slow"><a <?php if($title == "Location") echo 'id="active"'; ?> href="/location">Location</a></li>
      <li style="animation-delay: 0.4s;" class="animated bounceInLeft slow"><a <?php if($title == "Gallery") echo 'id="active"'; ?> href="/gallery">Gallery</a></li>
      <li style="animation-delay: 0.6s;" class="animated bounceInLeft slow"><a <?php if($title == "Info") echo 'id="active"'; ?> href="/info">Info</a></li>
      <li style="animation-delay: 0.8s;" class="animated bounceInLeft slow"><a <?php if($title == "Contact") echo 'id="active"'; ?> href="/contact">Contact</a></li>
		</ul>
	</nav>
  <!-- end: Navigation -->

  <!-- start: Main -->
  <main id="main_absolute" class="animated fadeIn slow">
    <div class="row" style="margin-bottom: 4rem; clear: both;">
      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block_full">
        <a style="color: black; font-size: 1.5em" href="/booking">You have completed your booking request</a>
      </div>
    </div>

    <div class="row" style="margin-bottom: 5rem; clear: both; text-align: center">
      <br>
      <p style="color: grey">You will receive an e-mail confirmation shortly.</p>
      <br><br>
      <p style="color: grey">Thank you for selecting Stone Villa Pelion!</p>
      <br><br>
      <img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="Stone Villa Pelion" width="128">
    </div>

  </main>
  <!-- end: Main -->

  <!-- start: Footer -->
  <footer>
    <p>Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>

    <a href="<?php echo site_url('booking'); ?>">EN<span style="opacity:0.4;">/GR</span></a>
  </footer>
  <!-- end: Footer -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>
