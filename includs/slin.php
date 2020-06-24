<?php
include './conn.php';
session_start();
$email = trim(strip_tags($_POST['email']));
$pwd = trim(strip_tags($_POST['pwd']));

$query = "SELECT * FROM student WHERE email='$email'
and pwd='$pwd'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
	while ($res = mysqli_fetch_array($result)) {
	$_SESSION["id"] = $res['id'];
	$_SESSION["name"] = $res['name'];
	$_SESSION["sep"] = $res['sep'];
	header('Location: ../sdep.php');
	}
	


}else{
	header('Location: ../sin.php?pwd=1');
}


?>