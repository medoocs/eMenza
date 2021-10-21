<?php
require('db.php');
$id=$_REQUEST['Id_Comm_Menze2'];
$query = "DELETE FROM komentar_menze2 WHERE Id_Comm_Menze2=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view-delete2.php"); 
?>