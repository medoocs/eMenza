<?php
require('db.php');
include('auth.php');
$id=$_SESSION['username'];
$query = "SELECT * from korisnik where Username='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel="stylesheet" href="style.css">
 </head>

</div>

<div class="delbtn">
  <a href="kantina2.php">NAZAD</a>
</div>
<div class="nitko">
<h2>Moj profil</h2><br/>
<form name="form" method="post">




<h2>Mjenjajte profil:  <?php

 $nesto=$_SESSION['username'];
echo"$nesto"; ?>!</h2> <br />

<?php

$status = "";

if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_SESSION['username'];

$Username =$_REQUEST['Username'];

$Email = $_REQUEST['Email'];
$Lozinka=$_REQUEST['Lozinka'];

if ($_REQUEST['Lozinka']==NULL) {

$update="update korisnik set Username='".$Username."',
Email='".$Email."' where username='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Profil je uspješno promjenjen </br></br>";
echo"banana";

session_destroy();
header("Location: index.php");
}
 else {
	$id=$_SESSION['username'];

$Username =$_REQUEST['Username'];

$Email = $_REQUEST['Email'];
	$md555=md5($Lozinka);

$update="update korisnik set Username='".$Username."',
Email='".$Email."',Lozinka='".$md555."' where username='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Profil je uspješno promjenjen </br></br>";

session_destroy();
header("Location: index.php");



 }

}
?>


<input type="hidden" name="new" value="1" />
<p><input type="text" name="Username" placeholder="Username" required
 value="<?php echo $row['Username'];?>" /></p><br/>
<p><input type="email" name="Email" placeholder="Email" required value="<?php echo $row['Email'];?>" /></p> <br/>
<p><input type="password" name="Lozinka" placeholder="Lozinka"  /></p><br/>

<p><input class="nitko2" name="submit" type="submit" value="Spremi" /></p>
</form>


</div>








</html>
