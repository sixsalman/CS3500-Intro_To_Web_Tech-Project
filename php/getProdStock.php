<?php
	require_once('config.php');

	try {
		$conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		exit($e->getmessage());
	}

	$statement = $conn->prepare("SELECT `Stock Status` FROM Products WHERE Title = ?");

	$statement->execute(array($_REQUEST['prodName']));

	if ($emp = $statement->fetch()) {
		echo $emp['Stock Status'];
	} else {
		echo "";
	}

	$conn = null;
?>