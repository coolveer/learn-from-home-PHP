<?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<br>
	<h2 class="text-center" style="font-family: 'Pacifico', cursive;">Student's</h2>
	<!-- login -->
	<h2 class="text-center" style="font-family: 'Pacifico', cursive;">Login</h2>
	<form method="post" action="./includs/slin.php">
		<div class="form-group">
			<input type="text" name="email" class="form-control" placeholder="Email" required><br>
			<input type="password" name="pwd" class="form-control" placeholder="password" required><br>
				<?php 
				if(isset($_GET['pwd'])) {
					echo "<hr> <p style='color:red'> email or password not matched </p> <hr>";
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
