<?php
	require_once('config.php');

	try {
		$conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		exit($e->getmessage());
	}
        
	$seed = uniqid();

	$cryptPass = md5($_REQUEST['newPass'] . $seed);
       
	$statement = $conn->prepare("UPDATE Employees SET Seed = ?, Password = ? WHERE ID = ?");

	$statement->execute(array($seed, $cryptPass, $_REQUEST['empId']));

	$conn = null;
?>