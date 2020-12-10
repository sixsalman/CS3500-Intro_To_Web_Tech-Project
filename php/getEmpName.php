<?php
	require_once('config.php');

	try {
		$conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		exit($e->getmessage());
	}

	$Res = $conn->query("SELECT Seed FROM Employees WHERE ID = " . $_REQUEST['empId']);
	
	if ($Row = $Res->fetch()) {
		$GLOBALS['seed'] = $Row['Seed'];
	} else {
		echo "";
		exit();
	}
        
	$cryptPass = md5($_REQUEST['empPass'] . $seed);
       
	$statement = $conn->prepare("SELECT `Full Name` FROM Employees WHERE ID = ? AND Password = ?");

	$statement->execute(array($_REQUEST['empId'], $cryptPass));

	if ($emp = $statement->fetch()) {
		echo $emp['Full Name'];
	} else {
		echo "";
	}

	$conn = null;
?>