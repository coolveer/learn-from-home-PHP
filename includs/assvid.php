<?php

if (strpos($_POST['url'], 'youtu.be') !== false) {
    $url = str_replace('youtu.be', 'www.youtube.com/embed', $_POST['url']);
    include './conn.php';

	$subid = trim(strip_tags($_POST['subid']));
	echo $subid;
	$desc = trim(strip_tags($_POST['desc']));

	$sql = "INSERT INTO `youtube`( `url`, `disc`,`subid`) VALUES ('$url','$desc','$subid')";

	mysqli_query($conn, $sql);

	header('Location: ../addata.php?entry=true');
}
else{
	$url = str_replace('watch?v=', 'embed/', $_POST['url']);
    include './conn.php';

	$subid = trim(strip_tags($_POST['subid']));
	$desc = trim(strip_tags($_POST['desc']));

	$sql = "INSERT INTO `youtube`( `url`, `disc`,`subid`) VALUES ('$url','$desc','$subid')";

	mysqli_query($conn, $sql);

	header('Location: ../addata.php?entry=true');
}

?>