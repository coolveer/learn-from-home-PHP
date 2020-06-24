<?php

$id = $_GET["id"];
include './conn.php';
$sql = "UPDATE teacher SET f = 'c' WHERE id = '$id';";
mysqli_query($conn, $sql);

header('Location: ../reql.php');



?>