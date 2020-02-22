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
<html lang="el">
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
</head>

<body id="homepage_body">

  <!-- start: Header -->
  <header id="header" style="background: none">
    <div id="header_logo">
      <h1><a href="<?php echo site_url('gr'); ?>" title="Αρχική Σελίδα">Stone Villa Pelion</a></h1>
    </div>

    <div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
  </header>
  <!-- end: Header -->

  <!-- start: Navigation -->
  <nav id="nav" style="background: none">
    <ul>
      <li style="animation-delay: 0.0s;" class="animated bounceInLeft slow"><a <?php if($title == "Κράτηση") echo 'id="active"'; ?> href="<?php echo site_url('gr/booking'); ?>">Κράτηση</a></li>
      <li style="animation-delay: 0.1s;" class="animated bounceInLeft slow"><a <?php if($title == "Τοποθεσία") echo 'id="active"'; ?> href="<?php echo site_url('gr/location'); ?>">Τοποθεσία</a></li>
      <li style="animation-delay: 0.2s;" class="animated bounceInLeft slow"><a <?php if($title == "Φωτογραφίες") echo 'id="active"'; ?> href="<?php echo site_url('gr/gallery'); ?>">Φωτογραφίες</a></li>
      <li style="animation-delay: 0.3s;" class="animated bounceInLeft slow"><a <?php if($title == "Πληροφορίες") echo 'id="active"'; ?> href="<?php echo site_url('gr/info'); ?>">Πληροφορίες</a></li>
      <li style="animation-delay: 0.4s;" class="animated bounceInLeft slow"><a <?php if($title == "Επικοινωνία") echo 'id="active"'; ?> href="<?php echo site_url('gr/contact'); ?>">Επικοινωνία</a></li>
    </ul>
  </nav>
  <!-- end: Navigation -->

  <!-- start: Footer -->
  <footer>
    <p style="color: whitesmoke">Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>
    <a style="color: whitesmoke" href="<?php echo site_url(); ?>"><span style="opacity:0.4;">EN/</span>GR</a>
  </footer>
  <!-- end: Footer -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>
