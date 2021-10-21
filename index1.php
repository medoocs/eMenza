<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html>

</html>
  <head>
    <meta charset="utf-8">
    <title>e-Menza</title>
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
  <div class="naslov">
		<h1>e-Menza</h1>
		<?php
		if(empty($_SESSION['username'])){
			
		echo"<a href='login.php'>PRIJAVI SE</a>";	
		} else {
    echo"<a href='logout.php'>ODJAVI SE</a>";
		}?>
  
	</div>
	<?php
	if(empty($_SESSION['username'])){} else {
	?>
<h2 align="center">Dobrodošao 
<?php 

$nesto=$_SESSION['username'];
echo"$nesto"; }?>!

</h2>
  <div class="container">

	<div class="kantina" id="kantina1">
		<img src="mini1.jpg" class="slika1"> </br></br></br>
		<?php
		$query = "SELECT AVG(ocjena) FROM ocjena1";
		$result = mysqli_query($con,$query);
		$row= mysqli_fetch_array($result);
		$row2=round($row[0],1);
		echo "<p  allign='center'><font color='yellow'><b>Ocjena: $row2</b></font></p>
		";
		
		?>
		
    <h3>Restaurant Mini</h3>
    <p>Adresa: Ulica Franje Čandeka 4</p>
    <p>Radno vrijeme: 09:00 - 21:00</p>
		<p id="radnoVrijeme1" class="rVrijeme"> OTVORENO </p> </br>
    <a href="kantina1.php">VIŠE</a>
	</div>

	<div class="kantina" id="kantina2">
		<img src="Restoran_indeks_danas.jpg" class="slika2"> </br></br></br>
		<?php
		$query = "SELECT AVG(ocjena) FROM ocjena2";
		$result = mysqli_query($con,$query);
		$row= mysqli_fetch_array($result);
		$row2=round($row[0],1);
		echo "<p  allign='center'><font color='yellow'><b>Ocjena: $row2</b></font></p>
		";
		
		?>
    <h3>Restaurant Index</h3>
    <p>Adresa: Krešimirova Ulica 18</p>
    <p>Radno vrijeme: 09:00 - 21:00</p>
		<p id="radnoVrijeme2" class="rVrijeme"> OTVORENO </p> </br>
    <a href="kantina2.php">VIŠE</a>
	</div>

	<div class="kantina" id="kantina3">
		<img src="kampus2.jpg" class="slika3"> </br></br></br>
		<?php
		$query = "SELECT AVG(ocjena) FROM ocjena3";
		$result = mysqli_query($con,$query);
		$row= mysqli_fetch_array($result);
		$row2=round($row[0],1);
		echo "<p  allign='center'><font color='yellow'><b>Ocjena: $row2</b></font></p>
		";
		
		?>
    <h3>Restaurant Kampus</h3>
    <p>Adresa: Ulica Radmile Matejčić</p>
    <p>Radno vrijeme: 09:00 - 21:00</p>
		<p id="radnoVrijeme3" class="rVrijeme"> OTVORENO </p> </br>
    <a href="kantina3.php">VIŠE</a>
	</div>





  </div>
  <script src="radnovrijeme.js"></script>
  
  
  
  
  
  
  
<div>  
 
</div>
</body>
</html>
