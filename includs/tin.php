<?php
include './conn.php';
session_start();
$email = trim(strip_tags($_POST['email']));
$pwd = trim(strip_tags($_POST['pwd']));

$query = "SELECT * FROM teacher WHERE email='$email'
and pwd='$pwd' and f='c'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
	while ($res = mysqli_fetch_array($result)) {
	$_SESSION["id"] = $res['id'];
	$_SESSION["name"] = $res['name'];
	$_SESSION["sep"] = $res['sep'];
	header('Location: ../tview.php');
	}
	


}else{
	header('Location: ../tin.php?pwd=1');
}


?>