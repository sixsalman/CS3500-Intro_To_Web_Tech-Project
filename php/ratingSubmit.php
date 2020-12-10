<?php
	require_once('config.php');

	try {
		$conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		exit($e->getmessage());
	}

	$statement = $conn->prepare("INSERT INTO Ratings (`ID`, `Overall`, `Fabric Quality`, `Stitch Quality`, `Staff Hospitality`, `Store Cleanliness`, `Comments / Improvement Suggestions`) VALUES (NULL, ?, ?, ?, ?, ?, ?);");
	
	$statement->execute(array(
		($_REQUEST['overall'] == NULL) ? NULL : $_REQUEST['overall'], 
		($_REQUEST['fabricQuality'] == NULL) ? NULL : $_REQUEST['fabricQuality'], 
		($_REQUEST['stitchQuality'] == NULL) ? NULL : $_REQUEST['stitchQuality'], 
		($_REQUEST['staff'] == NULL) ? NULL : $_REQUEST['staff'], 
		($_REQUEST['cleanliness'] == NULL) ? NULL : $_REQUEST['cleanliness'], 
		$_REQUEST['comments']
	));

	$conn = null;
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank You | The Closet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../css/styleCommon.css">
	<link rel="stylesheet" type="text/css" href="../css/style768AndAbove.css" media="screen and (min-width:768px)">
	<link rel="stylesheet" type="text/css" href="../css/styleBelow768.css" media="screen and (max-width:767px)">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
</head>
<body id="ratingSubmitBody">
	<div class="aboveFooter">
		<header>
			<a href="../" title="Home Page"><h1>The Closet</h1></a>
			<hr>
			<nav>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headNav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
			    </div>
			    <div class="collapse navbar-collapse" id="headNav">
					<ul class="nav">
						<li><a href="../php/catalog.php">Our Products</a></li>
						<li><a href="../deals.html">Deals</a></li>
						<li><a href="../rateUs.html">Rate Us</a></li>
						<li><a href="../forStaff.html">For Staff</a></li>
						<li><a href="../about.html">About Website</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main>
			<p>Your response has been submitted<br>Thank you for rating us</p>
		</main>
	</div>

	<footer>
		<p class="center">Copyright &copy; 2020 Salman</p>
	</footer>
</body>
</html>