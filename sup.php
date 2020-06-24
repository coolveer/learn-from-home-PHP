 <?php
	include './hedder.php';
?>
<br><br><br>
<div class="container">
	<form action="./includs/sup.php" method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="name" required> <br>
			<input type="text"  class="form-control" name="sem" placeholder="semester" required> <br>
			<input type="text" class="form-control" name="strm" placeholder="stream like cse,ece etc." required> <br>
			<input type="text" class="form-control" name="rno" placeholder="Roll No" required> <br>
			<input type="number" class="form-control" name="mno" placeholder="Mobile Number" required> <br>
			<input type="email" class="form-control" name="email" placeholder="Email" required> <br>
			<?php 
				if(isset($_GET['email'])) {
					echo "<p style='color:red'> email already taken </p>";
				}else{
					echo "";
				}

			?>
			<input type="password" class="form-control" name="pwd" placeholder="Passowrd" required> <br>
			<input type="password" class="form-control" name="pwd1" placeholder="Confirm Passowrd" required> <br>
			<?php 
				if(isset($_GET['pwd'])) {
					echo "<p style='color:red'> password not match </p>";
				}else{
					echo "";
				}

			?>
			<button type="submit" name="signup" class="btn btn-success btn-block">Signup</button>	<br><br>
		</div>
	</form>
</div>
<?php
	include './footer.php';
?>