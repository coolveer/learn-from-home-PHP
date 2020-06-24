<?php
session_start();
	include './conn.php';

	$desc = trim(strip_tags($_POST['dicdata']));
	$name = $_SESSION['name'];
	$sid = $_SESSION['sid'];
	$sep = $_SESSION['sep'];

	if ($_SESSION['sep']==0) {
		$name = $name."(student)";
		
	}
	else{
		$name = $name."(teacher)";
	}

	
	
	$sql = "INSERT INTO `discuss`( `name`, `disc`,`subid`,`sep`) VALUES ('$name','$desc','$sid','$sep')";

	mysqli_query($conn, $sql);

	header('Location: ../disc.php');

?>