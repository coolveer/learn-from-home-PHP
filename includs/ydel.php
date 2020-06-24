<?php

$id = $_GET["id"];
include './conn.php';
$sql = "DELETE FROM youtube WHERE id='$id';";
mysqli_query($conn, $sql);

header('Location: ../test.php');



?>