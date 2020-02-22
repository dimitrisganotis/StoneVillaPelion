<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="noindex, nofollow">
	<title><?php echo $title; ?></title>

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
		<h2>Login</h2>
							
		<?php echo form_open('admin/login'); ?>
			<p>Username:</p> <input name="username" type="text" required>
			<br>
      <p>Password:</p> <input name="password" type="password" required>
      <br><br>
			<input type="submit">
		</form>

    <br>
	</main>

	<footer>
		<small>Copyright &copy; 2019 stonevillapelion.gr. All Rights Reserved</small>
	</footer>
</body>
</html>