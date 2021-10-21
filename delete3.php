<?php
require('db.php');
$id=$_REQUEST['Id_Comm_Menze3'];
$query = "DELETE FROM komentar_menze3 WHERE Id_Comm_Menze3=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view-delete3.php"); 
?>