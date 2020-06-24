<?php
session_start();
	include './hedder.php';
	if ($_SESSION["sep"]==1) {
		echo "";
	}else{
		header('Location: ./index.php');
	}
?>
<br><br><br>
<div class="container">
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br>
	<br><br><br>
	<a href="./addsub.php?sf=0">
		<button type="button" class="btn btn-primary btn-lg btn-block">Add Subject</button>
	</a><br>

	<a href="./reql.php?sf=0">
		<button type="button" class="btn btn-primary btn-lg btn-block">Request List</button>
	</a><br>

	<a href="./addata.php?sf=0">
		<button type="button" class="btn btn-primary btn-lg btn-block">Add Material</button>
	</a><br>

	<a href="./sdep.php?sf=0">
		<button type="button" class="btn btn-primary btn-lg btn-block">login as student</button>
	</a><br>

</div>
<?php
	include './footer.php';
?>