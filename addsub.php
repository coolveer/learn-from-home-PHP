<?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<a href="./tview.php"><button type="button" class="btn btn-info">back</button></a>
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
	<br><br><br>

	<form class="form-group" method="post" action="./includs/addsub.php">
		<input type="text" class="form-control" placeholder="Subject Name" name="subname" required><br>
		<p>Select Department:</p>
		<div class="d-flex justify-content-center">
			<select id="dep" name="dep" >
			  <option value="0">CS/IT</option>
			  <option value="1">EC/EI</option>
			  <option value="2">Mec.</option>
			  <option value="3">EE</option>
			</select>
		</div> <br>
		
		<button type="submit" class="btn btn-success btn-block">Add this subject</button>
	</form>
	<?php 
				if(isset($_GET['sub'])) {
					echo "<hr> <p style='color:red'>A New sub has been added </p> <hr>";
				}else{
					echo "";
				}

			?>


</div>
<?php
	include './footer.php';
?>