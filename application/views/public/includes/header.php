<!DOCTYPE html>
<!--
..................................
. Developed by:                  .
.                                .
. Dimitrios Ganotis              .
. https://www.dimitrisganotis.gr .
. info@dimitrisganotis.gr        .
..................................
-->
<html lang="el">
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
</head>
<body>

  <!-- start: Header -->
	<header id="header">
		<div id="header_logo">
			<h1><a href="<?php echo site_url(); ?>" title="Αρχική Σελίδα">Stone Villa Pelion</a></h1>
		</div>

		<div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
	</header>
  <!-- end: Header -->

  <!-- start: Navigation -->
	<nav id="nav">
		<ul>
			<li style="animation-delay: 0.0s;" class="animated bounceInLeft slow"><a <?php if($title == "Booking") echo 'id="active"'; ?> href="<?php echo site_url('booking'); ?>">Booking</a></li>
      <li style="animation-delay: 0.2s;" class="animated bounceInLeft slow"><a <?php if($title == "Location") echo 'id="active"'; ?> href="<?php echo site_url('location'); ?>">Location</a></li>
      <li style="animation-delay: 0.4s;" class="animated bounceInLeft slow"><a <?php if($title == "Gallery") echo 'id="active"'; ?> href="<?php echo site_url('gallery'); ?>">Gallery</a></li>
      <li style="animation-delay: 0.6s;" class="animated bounceInLeft slow"><a <?php if($title == "Info") echo 'id="active"'; ?> href="<?php echo site_url('info'); ?>">Info</a></li>
      <li style="animation-delay: 0.8s;" class="animated bounceInLeft slow"><a <?php if($title == "Contact") echo 'id="active"'; ?> href="<?php echo site_url('contact'); ?>">Contact</a></li>
		</ul>
	</nav>
  <!-- end: Navigation -->
