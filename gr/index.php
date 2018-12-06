<?php
  $title = "Stone Villa Pelion";
  $projectName = "Stone Villa Pelion";
?>

<!DOCTYPE html>

<!--
..........................................
Developed by:

Dimitrios Ganotis
https://github.com/dimitrisganotis
dimitrisgan97@gmail.com
..........................................
-->

<html lang="el">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <meta name="description" content="Το Stone Villa Pelion είναι ένα πολυτελές διαμέρισμα, ιδανικό για καλοκαιρινές διακοπές, με θέα την παραλία της Αφύσσου.">
  <meta name="keywords" content="Stone Villa Pelion, Άφυσσος, Πήλιο, Διαμέρισμα, Πολυτελής Οικία">
  <meta name="google-site-verification" content="bWvvL28cgqYgWDHFBlw9S6_YQSMEQe1kpGkCQwYmJ4o">
  <title><?php echo $title; ?></title>
  <link rel="alternate" hreflang="en" href="http://www.stonevillapelion.gr/">
  <link rel="alternate" hreflang="el" href="http://www.stonevillapelion.gr/gr/">
  <link rel="alternate" hreflang="x-default" href="http://www.stonevillapelion.gr/"">
  <link rel="icon" type="image/icon" href="/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"><!-- %7C -->
  <link rel="stylesheet" type="text/css" href="/css/animate.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
  <script type="text/javascript" src="/js/lightbox-plus-jquery.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
</head>

<body id="homepage_body">

  <!-- =======================
            HEADER
	======================== -->
  <header id="header" style="background: none">
    <div id="header_logo">
      <h1><a href="index.php" title="Homepage"><?php echo $projectName; ?></a></h1>
    </div>

    <div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
  </header>

  <!-- =======================
          NAVIGATION
	======================== -->

  <nav id="nav" style="background: none">
    <ul>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Request Booking") echo 'id="active"'; ?> href="booking.php">Αίτηση Κράτησης</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Location") echo 'id="active"'; ?> href="location.php">Τοποθεσία</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Gallery") echo 'id="active"'; ?> href="gallery.php">Φωτογραφίες</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Info") echo 'id="active"'; ?> href="info.php">Πληροφορίες</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Contact") echo 'id="active"'; ?> href="contact.php">Επικοινωνία</a></li>
    </ul>
  </nav>


  <!-- =======================
            FOOTER
  ======================== -->
  <footer>
    <p style="color: whitesmoke">Stone Villa Pelion &copy 2018</p>
    <a style="color: whitesmoke" href="/"><span style="opacity:0.4;">EN/</span>GR</a>
  </footer>

</body>

</html>
