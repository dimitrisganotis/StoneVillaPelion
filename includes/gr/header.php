<?php
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
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/icon" href="/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"><!-- %7C -->
  <link rel="stylesheet" type="text/css" href="/css/animate.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
  <script type="text/javascript" src="/js/lightbox-plus-jquery.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
</head>

<body>

  <!-- =======================
            HEADER
	======================== -->
  <header id="header">
    <div id="header_logo">
      <h1><a href="index.php" title="Homepage"><?php echo $projectName; ?></a></h1>
    </div>

    <div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
  </header>

  <!-- =======================
          NAVIGATION
	======================== -->

  <nav id="nav">
    <ul>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Αίτηση Κράτησης") echo 'id="active"'; ?> href="booking.php">Αίτηση Κράτησης</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Τοποθεσία") echo 'id="active"'; ?> href="location.php">Τοποθεσία</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Φωτογραφίες") echo 'id="active"'; ?> href="gallery.php">Φωτογραφίες</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Πληροφορίες") echo 'id="active"'; ?> href="info.php">Πληροφορίες</a></li>
      <li class="animated fadeInLeft slow"><a <?php if($title == "Επικοινωνία") echo 'id="active"'; ?> href="contact.php">Επικοινωνία</a></li>
    </ul>
  </nav>
