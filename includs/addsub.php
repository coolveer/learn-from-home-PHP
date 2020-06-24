<?php
include './conn.php';

$dep = trim(strip_tags($_POST['dep']));
$subname = trim(strip_tags($_POST['subname']));

$sql = "INSERT INTO `subtale`( `name`, `dep`) VALUES ('$subname','$dep')";

mysqli_query($conn, $sql);

header('Location: ../addsub.php?sub=true');


?>