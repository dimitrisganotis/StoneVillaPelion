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
      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block3_1 hide">
        <a href="<?php echo site_url('gr/booking'); ?>">Επιλογή Ημερομηνιών</a>
      </div>

      <div class="booking_blocks_of_3 block3_2">
        <a>Φιλοξενούμενοι - Προαιρετικές Υπηρεσίες</a>
      </div>

      <div style="border-bottom: grey 5px solid;" class="booking_blocks_of_3 block3_3 hide">
        <a style="color: grey">Ολοκλήρωση Κράτησης</a>
      </div>
    </div>

    <?php echo form_open('gr/booking'); ?>
      <div class="row" style="margin-bottom: 5rem; clear: both;">
        <div style="border-bottom: none" class="booking_blocks_of_3 block3_1 text-left">
          <label style="margin-bottom: 0.5rem;" for="guests" class="label">&nbsp; Φιλοξενούμενοι &nbsp;<i style="font-style: normal; background: grey; color: white; border-radius: 50%; padding: 1.5px 5.1px 1.5px 5px; font-size: 0.8em; font-weight: bold" class="tooltip">&nbsp;i&nbsp;<span style="font-size: 1em" class="tooltiptext">Ενήλικες και Παιδιά</span></i></label>

          <label for="guests" class="calendar_icon">
            <i class="fas fa-male"></i>
          </label>

          <input id="guests" type="number" name="guests" min="1" max="6" required>
        </div>

        <div style="border-bottom: none; text-align: left;" class="booking_blocks_of_3 block3_2 margin">
          <table>
            <tr>
              <td class="td-left">
                <label for="crib" class="label">Κούνια Μωρού/Βρέφους &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="float: right; font-style: normal; background: grey; color: white; border-radius: 50%; padding: 1.5px 5.1px 1.5px 5px; font-size: 0.8em; font-weight: bold" class="tooltip">&nbsp;i&nbsp;<span style="font-size: 1em" class="tooltiptext-right">Ζητήστε μια κούνια για το μικρό σας</span></i> &nbsp;&nbsp;&nbsp;</label>
              </td>

              <td class="td-right">
                <input style="transform: scale(1.3); float: right" id="crib" type="checkbox" name="crib" value="Yes">
              </td>
            </tr>

            <tr>
              <td class="td-left">
                <label for="pets" class="label">Πιάτα Κατοικιδίων &nbsp;<i style="float: right; font-style: normal; background: grey; color: white; border-radius: 50%; padding: 1.5px 5.1px 1.5px 5px; font-size: 0.8em; font-weight: bold" class="tooltip">&nbsp;i&nbsp;<span style="font-size: 1em" class="tooltiptext-right">Ζητήστε πιάτο για το νερό και το φαγητό των κατοικιδίων σας</span></i> &nbsp;&nbsp;&nbsp;</label>
              </td>

              <td class="td-right">
                <input style="transform: scale(1.3); float: right" id="pets" type="checkbox" name="pets" value="Yes">
              </td>
            </tr>
          </table>
        </div>
      </div>

        <div style="border-bottom: none; text-align: left;" class="booking_blocks_of_3 block3_3 margin">
        <table>
            <tr>
              <td class="td-left">
                <label for="laundry" class="label">Πλυντήριο/Σιδέρωμα &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="float: right; font-style: normal; background: grey; color: white; border-radius: 50%; padding: 1.5px 5.1px 1.5px 5px; font-size: 0.8em; font-weight: bold" class="tooltip">&nbsp;i&nbsp;<span style="font-size: 1em" class="tooltiptext-right">Η καθαρίστρια συλλέγει τα ρούχα σας για πλύσιμο και σιδέρωμα κάθε δύο ημέρες</span></i> &nbsp;&nbsp;&nbsp;</label>
              </td>

              <td class="td-right">
                <input style="transform: scale(1.3); float: right" id="laundry" type="checkbox" name="laundry" value="Yes">
              </td>
            </tr>

            <tr>
              <td class="td-left">
                <label for="towels" class="label">Πετσέτες Παραλίας &nbsp;&nbsp;&nbsp;</label>
              </td>

              <td class="td-right">
                <input style="transform: scale(1.3); float: right" id="towels" type="checkbox" name="towels" value="Yes">
              </td>
            </tr>
          </table>
        </div>
      </div>

      <input type="hidden" name="check-in" value="<?php echo $dates['check-in']; ?>">
      <input type="hidden" name="check-out" value="<?php echo $dates['check-out']; ?>">
      <input id="submit" type="submit" style="display: none;">
    </form>

    <br><br>

    <div class="row" style="margin-top: 5rem; margin-bottom: 0.5rem; clear: both; background-color: #e5e5e5; text-align: center; padding: 0.8rem; font-style: italic;">
      Το Stone Villa Pelion μπορεί να φιλοξενήσει το μέγιστο 6 άτομα και 1 μωρό/βρέφος (παρέχεται κούνια).
      <br>
      * Δεν υπάρχει επιπλέον χρέωση για οποιαδήποτε από τις Προαιρετικές Υπηρεσίες.
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

</body>
</html>
