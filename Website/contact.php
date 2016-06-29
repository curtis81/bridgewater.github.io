<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bridgewater Web Design</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
	<script src="jquery.js"></script>
	<script src="bootstrap.js"></script>
	<link rel='stylesheet' href='contact.css'/>
</head>
<body>
<?php
	if(isset($_POST)){
		if (isset($_POST['name'])) {
			$message = "Hey Gary!\n" .
				$_POST["name"] . " is interested in some more info\n
				Email: " . $_POST["email"] . "\n
				Company: " . $_POST["org"] . "\n
				Comments: " . $_POST["comments"];
			$message = wordwrap($message,70);
			mail("curtis.harrison@bridgewaterwebdesign.com","Form Submitted",$message);
		}
	}
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><img src="Logo.png"></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="pricing.html">Pricing</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>
	<h1>For more information, please submit the following form:</h1>
		<div class= "form"><form action="contact.php" method="post" id="details">
			Name: <input type="text" name="name"><br><br>
			E-mail: <input type="text" name="email"><br><br>
			Company: <input type="text" name="org"><br><br>
			Comments: <textarea rows="4" cols="60" name="comments" form="details"></textarea>
			<input type="submit">
		</form></div>
	<h1>Or email us at info@bridgewaterwebdesign.com</h1>
</body>
</html>