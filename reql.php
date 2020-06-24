<?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<!-- here it starts -->
	<a href="./tview.php"><button type="button" class="btn btn-info">back</button></a>
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
	<?php
		include './includs/conn.php';
		$sql = "SELECT * FROM teacher WHERE f='nf' ORDER BY id DESC";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
        	<h5>'.$row["name"].'</h5>
			<p>mob no :'.$row["mno"].'</p><br>
			<a href="./includs/add.php?id='.$row["id"].'"><button type="button" class="btn btn-success">approve</button></a>
			<a href="./includs/del.php?id='.$row["id"].'"><button type="button" class="btn btn-danger float-right">delete</button></a>
			<hr>
        	';
   			}
		} 
		else {
    		echo "0 results";
		}


?>

</div>
<?php
	include './footer.php';
?>