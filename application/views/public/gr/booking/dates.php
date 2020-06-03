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
			<h1><a href="<?php echo site_url('gr'); ?>" title="Αρχική Σελίδα">Stone Villa Pelion</a></h1>
		</div>

		<div id="toggle_nav_btn" onclick="toogleNav()">&#9776;</div>
	</header>
  <!-- end: Header -->

  <!-- start: Navigation -->
	<nav id="nav">
		<ul>
      <li style="animation-delay: 0.0s; margin-bottom: 4rem;" class="animated bounceInLeft slow"><a <?php if($title == "Covid-19") echo 'id="active"'; ?> href="<?php echo site_url('gr/covid_19'); ?>">Covid-19</a></li>
			<li style="animation-delay: 0.2s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Κράτηση") echo 'id="active"'; ?> href="<?php echo site_url('gr/booking'); ?>">Κράτηση</a></li>
      <li style="animation-delay: 0.4s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Τοποθεσία") echo 'id="active"'; ?> href="<?php echo site_url('gr/location'); ?>">Τοποθεσία</a></li>
      <li style="animation-delay: 0.6s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Φωτογραφίες") echo 'id="active"'; ?> href="<?php echo site_url('gr/gallery'); ?>">Φωτογραφίες</a></li>
      <li style="animation-delay: 0.8s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Πληροφορίες") echo 'id="active"'; ?> href="<?php echo site_url('gr/info'); ?>">Πληροφορίες</a></li>
      <li style="animation-delay: 1.0s;" class="animated bounceInLeft slow"><a <?php if($metadata['title'] == "Επικοινωνία") echo 'id="active"'; ?> href="<?php echo site_url('gr/contact'); ?>">Επικοινωνία</a></li>
		</ul>
	</nav>
  <!-- end: Navigation -->

  <!-- start: Main -->
  <main id="main_absolute" class="animated fadeIn slow">
    <div class="row" style="margin-bottom: 5rem; clear: both;">
      <div class="booking_blocks_of_3 block3_1">
        <a href="<?php echo site_url('gr/booking'); ?>">Επιλογή Ημερομηνιών</a>
      </div>

      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block3_2 hide">
        <a style="color: grey">Φιλοξενούμενοι - Προαιρετικές Υπηρεσίες</a>
      </div>

      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block3_3 hide">
        <a style="color: grey">Ολοκλήρωση Κράτησης</a>
      </div>
    </div>

    <div class="row" style="margin-bottom: 5rem; clear: both;">
      <div class="booking_blocks_of_4 block4_1">
        &nbsp;
      </div>

      <?php echo form_open('gr/booking'); ?>
        <div class="booking_blocks_of_4 block4_2">
          <p>Άφιξη</p>

          <label for="check-in" class="calendar_icon" for="check-in">
            <i class="far fa-calendar-alt"></i>
          </label>

          <input id="check-in" type="text" name="check-in" autocomplete="off" readonly="true" required>
        </div>

        <div class="booking_blocks_of_4 block4_3">
          <p for="check-out">Αναχώρηση</p>

          <label for="check-out" class="calendar_icon">
            <i class="far fa-calendar-alt"></i>
          </label>

          <input id="check-out" type="text" name="check-out" autocomplete="off" readonly="true" required>
        </div>

        <input id="submit" type="submit" style="display: none" required>
      </form>

      <div class="booking_blocks_of_4 block4_4">
        &nbsp;
      </div>
    </div>

    <br><br>

    <div class="row" style="margin-top: 5rem;  margin-bottom: 0.5rem; clear: both; background-color: #e5e5e5; text-align: center; padding: 0.8rem; font-style: italic;">
      Το Stone Villa Pelion μπορεί να φιλοξενήσει το μέγιστο 6 άτομα και 1 μωρό/βρέφος (παρέχεται κούνια)
    </div>

    <div class="row" style="background-color: grey; text-align: center; padding-bottom: 0.4rem;">
      <label for="submit" style="display: block; color: white; font-size: 2em; cursor: pointer">&rarr;
    </div>
  </main>
  <!-- end: Main -->

  <!-- start: Footer -->
  <footer>
    <p>Stone Villa Pelion &copy; <?php echo date("Y"); ?></p>

    <a href="<?php echo site_url('booking'); ?>"><span style="opacity:0.4;">EN/</span>GR</a>
  </footer>
  <!-- end: Footer -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
    var array = ["2019-01-01"<?php
      foreach ($dates as $row) {
        echo ',"'.$row['date'].'"';
      }
    ?>];

    $( function() {
      $("#check-in, #check-out").datepicker( {
        beforeShowDay: function(date) {
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ array.indexOf(string) == -1 ]
        },

        showAnim: "slideDown",
        showOtherMonths: true,
        selectOtherMonths: true,
        dateFormat: "DD, dd/mm/yy",
        minDate: "+d",
        defaultDate: "+1w",

        onSelect: function(selectedDate) {
          if(this.id == 'check-in'){
            var dateMin = $('#check-in').datepicker("getDate");
            var rMin = new Date(dateMin.getFullYear(), dateMin.getMonth(),dateMin.getDate() + <?php echo $number; ?>); // Min Date = Selected + 1d
            $('#check-out').datepicker("option","minDate",rMin);
          }
        }
      });
    });
  </script>

</body>
</html>
