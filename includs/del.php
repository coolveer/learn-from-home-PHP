<?php

$id = $_GET["id"];
include './conn.php';
$sql = "DELETE FROM teacher WHERE id='$id';";
mysqli_query($conn, $sql);

header('Location: ../reql.php');



?>