<?php
require('db.php');
$id=$_REQUEST['Id_Comm_Menze'];
$query = "DELETE FROM komentar_menze WHERE id_Comm_Menze=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view-delete.php"); 
?>