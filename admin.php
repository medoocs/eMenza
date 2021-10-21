<?php

require('db.php');
session_start();

$ovo=$_SESSION['username'];
$sel_query="Select Ovlasti from korisnik where Username= '$ovo'";
$bla =mysqli_query($con,$sel_query);
$row1 = mysqli_fetch_row($bla);

$sel_query1="Select Ovlasti from korisnik where Username= 'farina'";
$blaa =mysqli_query($con,$sel_query1);

$row2 = mysqli_fetch_row($blaa);

if ($row1[0]==$row2[0]){
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="delbtn">
	<a href="kantina2.php">NAZAD</a>
</div>
<div class="nitko">
<h2>Dodaj admina</h2><br/>
<form name="form" method="post">
	<input type="hidden" name="new" value="1" />
<p><input type="text" name="Username1" placeholder="Username1" required /></p>


<p><input class="nitko2" name="submit" type="submit" value="Dodaj" /></p>
</form>
	<?php
	if(isset($_POST['new']) && $_POST['new']==1)
{
	$Username2 =$_REQUEST['Username1'];

	$nula=1;
	$update1="update korisnik set Ovlasti='".$nula."' where Username='".$Username2."'";
	mysqli_query($con, $update1) or die(mysqli_error());

}}

	?>
	</div>
	</body>
</html>
