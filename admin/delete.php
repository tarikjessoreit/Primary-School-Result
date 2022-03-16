<?php 
include "../include/config.php";

if (isset($_GET['rid'])) {
	$rid = $_GET['rid'];
	$sql = "DELETE FROM std_results WHERE ID = $rid";
	if (isset($_POST['txt'])) {
		if ($_POST['txt'] == 'DELETE') {
			if ($conn->query($sql)==true) {
				echo "Result Delete Successfull";
				header('location:result-list.php');
			}else{
				echo 'Error: '.$conn->error;
			}
		}else{
		echo 'Please Type again';
		}
	}
	
}



 ?>

 <form action="" method="post">
 	<div>Please Type "DELETE" for confirm</div>
 	<input type="text" name="txt" placeholder="type here" required>
 	<input type="submit" value="confirm" name="confDel">
 </form>