<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="noindex, nofollow">
	<title><?php echo $metadata['title']; ?></title>

	<style>
		html {
			background-color: lightgrey;
		}

		body {
			max-width: 600px;
			margin: 100px auto;
			padding: 15px 25px;
			border-radius: 15px;
			background-color: white;
			color: black;
		}

		header {
			text-align: center;
			border-bottom: lightgrey thin solid;
			padding-bottom: 5px;
		}

		main {
			padding: 15px;
		}

		p {
			font-size: 1.1em;
			display: inline-block;
		}

		.button > a {
			display: block;
			padding: 15px;
			border-radius: 15px;
			background-color: lightgrey;
			color: white;
			font-weight: bold;
			text-align: center;
		}

		.link {
			max-width: 570px; 
			word-wrap: break-word;
		}

		footer {
			text-align: center;
			border-top: lightgrey thin solid;
			padding-top: 10px;
		}

		small {
			font-size: 0.9em;
		}

		input {
			display: inline-block;
		}

	</style>
</head>
<body>
	<header>
		<h1>Stone Villa Pelion - Admin Panel</h1>
	</header>

	<main>
		<h2>Add Booking</h2>
							
		<?php echo form_open('admin/dashboard/addBooking'); ?>
			<p>Date:</p> <input name="date" type="text" placeholder="YYYY-MM-DD" required>
			<br>
			<input type="submit">
			<br>&nbsp;
		</form>

		<hr>

		<p style="display: block; font-weight: bold">Booked Dates:</p> 

		<ul style="padding: 0">
			<?php 
				foreach ($dates as $row) {
					echo '<li style="display: inline-block; padding: 5px 0; font-size: 1em">&nbsp;< '.$row['date'].' >&nbsp;</li>';
				} 
			?>
		</ul>

		<hr>

		<p style="display: block; font-weight: bold">Minimun number of dates:</p> 
		<?php echo form_open('admin/dashboard/updateMinDates'); ?> 
			<input style="width: 50px; text-align: center" name="number" type="number" value="<?php echo $number;?>" required> 
			<input type="submit">
		</form>

		<br>
	</main>

	<footer>
		<small>Copyright &copy; 2019 stonevillapelion.gr. All Rights Reserved</small>
	</footer>
</body>
</html>