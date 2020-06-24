<?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<?php 
				if(isset($_GET['login'])) {
					echo "<p style='color:red' class='text-center'> Your Account has been created kindly login to continue </p>";
				}else{
					echo "";
				}

			?>
	<!-- login -->
	<h2 class="text-center" style="font-family: 'Pacifico', cursive;">login</h2><br>
	<a href="./sin.php">
		<button type="button" class="btn btn-primary btn-lg btn-block">Student</button>
	</a><br>
	<a href="./tin.php">
		<button type="button" class="btn btn-primary btn-lg btn-block">Teacher</button>
	</a>
	
	<hr>

	<!-- signup -->
	<h2 class="text-center" style="font-family: 'Pacifico', cursive;">Signup</h2><br>
	<a href="./sup.php">
		<button type="button" class="btn btn-primary btn-lg btn-block">Student</button>
	</a><br>
	<a href="./tup.php">
		<button type="button" class="btn btn-primary btn-lg btn-block">Teacher</button>
	</a><br>
	<a href="#">
		<button type="button" class="btn btn-primary btn-lg btn-block">Download App</button>
	</a>
	









</div>
<?php
	include './footer.php';
?>














