<?php
require('db.php');
session_start();

if(isset($_POST['submit'])&& isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$komentar=$_REQUEST['komentar'];
	
	
	if($username && $komentar){
		$datum=date("d-m-Y h:i:sa");
		$ins="insert into komentar_menze (`username`, `Komentar`,`DATE`) values ('$username','$komentar','$datum')";
		mysqli_query($con,$ins) or die(mysql_error());
		header("Location: kantina1.php#komentar");
	}else{
		echo "Unesi sva polja";
		
	}
}else {
	header("Location: login.php");
}


?>


