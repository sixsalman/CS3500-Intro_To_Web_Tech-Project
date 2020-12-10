<?php
	require_once('config.php');

	try {
		$conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		exit($e->getmessage());
	}

	$cats = $conn->query("SELECT * FROM `Product Categories`");
	$catsArr = $cats->fetchAll();
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Our Products | The Closet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../css/styleCommon.css">
	<link rel="stylesheet" type="text/css" href="../css/style768AndAbove.css" media="screen and (min-width:768px)">
	<link rel="stylesheet" type="text/css" href="../css/styleBelow768.css" media="screen and (max-width:767px)">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
</head>
<body id="catalogBody">
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
						<li><a href=""><b>Our Products</b></a></li>
						<li><a href="../deals.html">Deals</a></li>
						<li><a href="../rateUs.html">Rate Us</a></li>
						<li><a href="../forStaff.html">For Staff</a></li>
						<li><a href="../about.html">About Website</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main>
			<nav>
				<ul>
					<?php
						foreach ($catsArr as $ind => $catRow) {
							echo "<li><a href='#" . $catRow['Category'] . "'>" . $catRow['Category'] . "</a></li>";
						}
					?>
				</ul>
			</nav>
			<div class="notNav">
				<?php
					foreach ($catsArr as $ind => $catRow) {
						echo "<dl id='" . $catRow['Category'] . (($ind === 0) ? "" : "' class='marginTop") ."'>";

						$prods = $conn->query("SELECT Title, `Image Name`, Description, `Price Range` FROM Products WHERE `Category ID` = " . $catRow['ID']);

						while ($prod = $prods->fetch()) {
							echo "<div class='product'>
									<dt>" . $prod['Title'] . "</dt>
									<dd><a href='../images/" . $prod['Image Name'] . "' target='_blank'><img src='../images/" . $prod['Image Name'] . "'></a>" . $prod['Description'] . "<span class='cost'>" . $prod['Price Range'] . "</span></dd>
									</div>";
						}

						echo "</dl>";
					}

					$conn = null;
				?>
			</div>
		</main>
	</div>

	<footer>
		<p class="center">Copyright &copy; 2020 Salman</p>
	</footer>

	<script src="../js/enlargeProdImg.js"></script>
</body>
</html>