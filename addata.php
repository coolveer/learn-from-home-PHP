<?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<a href="./tview.php"><button type="button" class="btn btn-info">back</button></a>
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
	<p>Post youtube video:</p>
	<form class="form-group" action="./includs/assvid.php" method="post">
		<p>Select subject:</p>
		<div class="d-flex justify-content-center">
			<select name="subid" >
			  <?php
			  	include './includs/conn.php';
				$sql = "SELECT * FROM subtale ";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
    				// output data of each row
    				while($row = mysqli_fetch_assoc($result)) {
        				echo '
        				<option value="'.$row["id"].'">'.$row["name"].'</option>
        				';
   					}
				} 
				else {
    				echo "0 results";
				}	
			  ?>
			</select>
		</div><br>
		<input type="text" placeholder="url of youtube" class="form-control" name="url" required><br>
		<input type="text" placeholder="Discription" class="form-control" name="desc" required><br>
		<button type="submit" class="btn btn-success btn-block">Post</button>
	</form>
	<hr>
	<p>Post text:</p>
	<!-- <form class="form-group">
		<p>Select subject:</p>
		<div class="d-flex justify-content-center">
			<select id="sub" name="dep" >
			  <option value="0">CS/IT</option>
			  <option value="1">EC/EI</option>
			  <option value="2">Mec.</option>
			  <option value="3">EE</option>
			</select>
		</div><br>
		<input type="text" placeholder="Tittle" class="form-control" name="title"><br>
		<input type="text" placeholder="Body" class="form-control" name="desc"><br>
		<button type="button" class="btn btn-success btn-block">Post</button><br><br>
	</form> -->


</div>
<?php
	include './footer.php';
?>