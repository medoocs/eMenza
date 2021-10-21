<?php
	require "db.php";
	session_start();

	if (isset($_POST['rate'])){
		$rating = $_POST['rating'];
		$username=$_SESSION['username'];
		
		


		$query = "SELECT COUNT(id) FROM ocjena1 where submittedby='$username'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);

	if($row['0']==0){
			$query = "INSERT INTO ocjena1 (ocjena, submittedby) VALUES ('$rating','$username')";
			$result = mysqli_query($con,$query);
			if($result === false) {
	        	die("Error: " . db_error);
	    	} 
	   
	}else {
			$query = "update  ocjena1 set ocjena ='$rating' where submittedby='$username'";
			$result = mysqli_query($con,$query);
			if($result === false) {
	        	die("Error: " . db_error);
	    	} 
	   
	}		
	}
	mysqli_close($con);
	header("Location: kantina1.php");
	die();
?>