<?php
	include './hedder.php';
	session_start();
?>
<br><br><br>
<div class="container">
	<!-- primery buttions -->
<a href="./sdep.php"><button type="button" class="btn btn-info">back</button></a>
<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
<!-- subject buttions -->
<?php 
	if (isset($_SESSION['id'])){
		$_SESSION['dep']= $_GET['dep'];
		include './includs/conn.php';
		$sql = "SELECT * FROM subtale WHERE dep = {$_GET['dep']} ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
        	<a href="./nfsub.php?sf='.$row["id"].'">
			<button type="button" class="btn btn-primary btn-lg btn-block">'.$row["name"].'</button>
			</a><br>
        	';
   			}
		} 
		else {
    		echo "0 results";
		}	
	} 
	else{
		header('Location: ./index.php?login=1');
	}
?>




</div>
<?php
	include './footer.php';
?>
