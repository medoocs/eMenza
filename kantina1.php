<?php
require('db.php');
session_start();
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>e-Menza | Restaurant Mini</title>
  <link rel="stylesheet" href="kantinaStyle.css">
</head>

<body>


  <header>
  <div class="wrapper">

  	<div class="logo">
      <h1><a href="index1.php">e-Menza</a></h1>

    </div>

  	<nav>
  		<ul>

		<?php
		
		if(empty($_SESSION['username'])){} else {
		$ovo=$_SESSION['username'];

$sel_query="Select Ovlasti from korisnik where Username= '$ovo'";
$bla =mysqli_query($con,$sel_query);
$row1 = mysqli_fetch_row($bla);

$sel_query1="Select Ovlasti from korisnik where Username= 'farina'";
$blaa =mysqli_query($con,$sel_query1);

$row2 = mysqli_fetch_row($blaa);

if ($row1[0]==$row2[0]){

			echo"<li><a href='editiranje.php'>DODAJ JELO</a></li>";
			echo"<li><a href='view-delete.php'>BRISANJE</a></li>";
			echo"<li><a href='admin.php'>DODAJ ADMINA</a></li>";
		}}
			?>

  			<li><a href="#tjedni">TJEDNI MENI</a></li>
  			<li><a href="#lokacija">LOKACIJA</a></li>
  			<li><a href="#info">INFORMACIJE</a></li>
  			<li><a href="#slike">SLIKE</a></li>
  			<li><a href="#komentar">KOMENTARI</a></li>
  			<li><a href="edit.php">PROFIL</a></li>
			<?php
            if(empty($_SESSION['username'])){

            }
            else{
            echo "<li><a href='logout.php'>ODJAVA</a></li>";
            }
         ?>
  		</ul>
  	</nav>
  </div>
  </header>
<div class="wrapper" id="tjedni">


<section class="tjedni">

 <h2>TJEDNI MENI</h2> <br/>
</br/>
  <table class="tjedniMeni"  >
  <tr>
    <th>PONEDJELJAK</th>
    <th>UTORAK</th>
    <th>SRIJEDA</th>
    <th>ČETVRTAK</th>
    <th>PETAK</th>
  </tr>
  <tr>
  <td>
<?php

$sel_query="Select * from pon LIMIT 1;";
echo"<b>Meni 1 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?>
</td>
<td><?php

$sel_query="Select * from uto LIMIT 1;";
echo"<b>Meni 1 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?>
</td>
<td><?php

$sel_query="Select * from sri LIMIT 1;";
echo"<b>Meni 1 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
<td><?php

$sel_query="Select * from cet LIMIT 1;";
echo"<b>Meni 1 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
<td><?php

$sel_query="Select * from pet LIMIT 1;";
echo"<b>Meni 1 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>



  </tr>

  <tr>
    <td>
<?php

$sel_query="Select * from pon LIMIT 1 OFFSET 1;";
echo"<b>Meni 2 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?>
</td>
<td><?php

$sel_query="Select * from uto LIMIT 1 OFFSET 1;";
echo"<b>Meni 2 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?>
</td>
<td><?php

$sel_query="Select * from sri LIMIT 1 OFFSET 1;";
echo"<b>Meni 2 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
<td><?php

$sel_query="Select * from cet LIMIT 1 OFFSET 1;";
echo"<b>Meni 2 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
<td><?php

$sel_query="Select * from pet LIMIT 1 OFFSET 1;";
echo"<b>Meni 2 </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
  </tr>
  <tr>
        <td>
<?php

$sel_query="Select * from pon LIMIT 3 OFFSET 2;";
echo"<b>VEGE Meni  </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?>
</td>
<td><?php

$sel_query="Select * from uto LIMIT 3 OFFSET 2;";
echo"<b>VEGE Meni  </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?>
</td>
<td><?php

$sel_query="Select * from sri LIMIT 3 OFFSET 2;";
echo"<b>VEGE Meni  </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
<td><?php

$sel_query="Select * from cet LIMIT 3 OFFSET 2;";
echo"<b>VEGE Meni  </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
<td><?php

$sel_query="Select * from pet LIMIT 3 OFFSET 2;";
echo"<b>VEGE Meni  </b></br>";
$result = mysqli_query($con,$sel_query);


while($row = mysqli_fetch_assoc($result)) { ?>

<?php echo $row["Juha"];?>
</br>
<div      id="lokacija">
<?php echo $row["Gl_Jelo"]; ?>
</br>
<?php echo $row["Prilog"]; ?>
</br>
<?php echo $row["Salata"]; ?>
</br>
<?php echo $row["Desert"]; ?>
</br>
</br>

<?php }
?></td>
  </tr>

  </table>
  <BR />
<h2 >GDJE SE NALAZIMO</h2><br/>
<iframe  id="info" src="https://maps.google.com/maps?q=ivan goran kovacic &t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400px" frameborder="0" style="border:0"></iframe>


<BR /><BR />

<h2 >INFORMACIJE</h2><br/>
<p>
Studentsko naselje Ivan Goran Kovacic<br/>
Ulica Franje Candeka 4
<br/>
Restoran «Mini» nalazi se u prizemlju objekta br. 1,<br/>
u Studentskom naselju «Ivan Goran Kovacic» u Rijeci,<br/>
u Candekovoj ulici br. 4. Uz pizzeriu studentima su<br/>
ovdje u ponudi jedan meni dnevno, jela s roštilja,<br/>
dvije vrste gotovih jela; ukupno i do 1000 obroka<br/>
dnevno.<br/>

Radno vrijeme restorana:<br/>
Od ponedjeljka do petka: od 7:00 do 21:00 sati<br/>
Subotom je restoran zatvoren.<br/>
Nedjeljom: od 7:00 do 21:00 sati<br/>
<div   id="slike" >
Recepcija: svaki dan od 6:00 do 22:00<br/>
Pizzeria: ponedjeljak – petak i nedjelja 12:00 do 21:00<br/>
Nocni cuvar: svaki dan od 22:00 do 6:00<br/>
Praonica rublja: ponedjeljak - petak od 7:00 do 15:00<br/>
</p>



</br/><h2 id="info">SLIKE</h2><br/>

<div class="gallery" >
  <img src="mini1.jpg" />
  <img src="mini2.jpg" />
  <img src="mini3.jpg" />

</div>


</br/><h2 id="komentar">KOMENTARIAJ I OCJENI</h2><br/>
<?php
if(empty($_SESSION['username'])){} else {?>
<form method="POST" action="rating1.php">
<select name="rating">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5" selected>5</option>
</select>
<input type="submit" name="rate" value="Rate!" class="submit">
</form>
<?php }
?>
<form action="komentar.php" method="POST">
		<table>

		<tr><td>Unesite komentar: </td></tr>
		<tr><td><textarea name="komentar" cols="200%" rows="7" placeholder="Unesite komentar"></textarea></td></tr>
		<tr><td><input type="submit" name="submit" value="Unesi" class="submit"></td></tr>
		</table>
</form>

<hr>

<?php
$bla="SELECT * FROM komentar_menze  ORDER BY date desc";
$query=mysqli_query($con,$bla);
while($row= mysqli_fetch_assoc($query)){
	echo "
	<br>
      <p class='username'>$row[Username]</p><br>
			<p class='comment'>$row[Komentar]</p> <br>
			<p class='date'>$row[DATE] </p><br><br><hr>
      ";
}
?>
</section>
</div>
</body>
</html>
