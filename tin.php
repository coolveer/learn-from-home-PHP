<?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<br>
	<h2 class="text-center" style="font-family: 'Pacifico', cursive;">Teacher's</h2>
	<!-- login -->
	<h2 class="text-center" style="font-family: 'Pacifico', cursive;">Login</h2>
	<form method="post" action="./includs/tin.php">
		<div class="form-group">
			<input type="text" name="email" class="form-control" placeholder="Email" required><br>
			<input type="password" name="pwd" class="form-control" placeholder="password" required><br>
			<?php 
				if(isset($_GET['pwd'])) {
					echo "<hr> <p style='color:red'> email or password not matched <br> or your request is not confirmed yet </p> <hr>";
				}else{
					echo "";
				}

			?>
			<input type="submit" name="lsubmit" class="form-control btn-primary">	
		</div>
	</form>

</div>
<?php
	include './footer.php';
?>