<?php
	include './hedder.php';
	session_start();
?>
<br><br><br>
<div class="container">
<div class="d-flex justify-content-between">
	<a href="./sub.php?dep=<?php echo($_SESSION['dep']); ?>"><button type="button" class="btn btn-info">back</button></a>
	<a href="./disc.php"><button type="button" class="btn btn-info ">Discussion</button></a>
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
</div>
<!-- from here it starts  -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
<p>this is some discription</p>
<hr>

<?php
		include './includs/conn.php';
		$sql = "SELECT * FROM youtube WHERE subid = {$_GET['sf']} ORDER BY id DESC";
		$result = mysqli_query($conn, $sql);
		$_SESSION['sid']= $_GET['sf'];

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
        	<!-- from here it starts  -->
			<div class="embed-responsive embed-responsive-16by9">
  				<iframe class="embed-responsive-item" src="'.$row["url"].'" allowfullscreen></iframe>
			</div>
			<p>'.$row["disc"].'</p>
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
