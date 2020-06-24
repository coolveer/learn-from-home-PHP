<?php
	include './hedder.php';
	session_start();
?>
<br><br><br>
<div class="container">
		<!-- primery buttions -->
	<a href="./nfsub.php?sf=<?php echo($_SESSION['sid']); ?>"><button type="button" class="btn btn-info">back</button></a>
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
	<form class="form-group" action="./includs/discadd.php" method="post">
		<input type="text" class="form-control" placeholder="write some thing here" name="dicdata" required> <br>
		<button type="submit" name = "submit"class="btn btn-info btn-block">Comment</button>	
	</form>
	<hr>

  <?php
		include './includs/conn.php';
		$sql = "SELECT * FROM discuss WHERE subid = {$_SESSION['sid']} ORDER BY id DESC";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
			<div class="card " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">'.$row["name"].'</h5>
    <p class="card-text">'.$row["disc"].'</p>
  </div>
</div><br>
        	';
   			}
		} 
		else {
    		echo "0 results";
		}


?><br><br><br>
</div>


</div>
<?php
	include './footer.php';
?>