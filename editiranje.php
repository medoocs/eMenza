<?php
require('db.php');
session_start();
?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel="stylesheet" href="style.css">
 </head>
 <?php

if(isset($_POST['new']) && $_POST['new']==1){

	$menza =$_REQUEST['Menza'];
	$ID =$_REQUEST['Id'];
	$Juha =$_REQUEST['Juha'];
    $Gl_Jelo =$_REQUEST['Gl_Jelo'];
	$Prilog =$_REQUEST['Prilog'];
	$Salata =$_REQUEST['Salata'];
	$Desert =$_REQUEST['Desert'];
	$Desert =$_REQUEST['Desert'];
    $dan = $_REQUEST['Dan'];

}
	if(isset($dan) && $dan =='Pon'){
	$ins_query="update  pon set Juha='".$Juha."',Gl_Jelo='".$Gl_Jelo."',Prilog='".$Prilog."',Salata='".$Salata."',Desert='".$Desert."' where Id = $ID";

    mysqli_query($con,$ins_query)
    or die(mysql_error());
	}
	else if(isset($dan) && $dan == 'Uto'){
		$ins_query="update  uto set Juha='".$Juha."',Gl_Jelo='".$Gl_Jelo."',Prilog='".$Prilog."',Salata='".$Salata."',Desert='".$Desert."' where Id = $ID";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
	}
	else if(isset($dan) && $dan =='Sri'){
		$ins_query="update  sri set Juha='".$Juha."',Gl_Jelo='".$Gl_Jelo."',Prilog='".$Prilog."',Salata='".$Salata."',Desert='".$Desert."' where Id = $ID";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
	}
	else if(isset($dan) && $dan == 'Cet'){
		$ins_query="update  cet set Juha='".$Juha."',Gl_Jelo='".$Gl_Jelo."',Prilog='".$Prilog."',Salata='".$Salata."',Desert='".$Desert."' where Id = $ID";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
	}
	else if(isset($dan) && $dan == 'Pet'){
		$ins_query="update  pet set Juha='".$Juha."',Gl_Jelo='".$Gl_Jelo."',Prilog='".$Prilog."',Salata='".$Salata."',Desert='".$Desert."' where Id = $ID";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
	}
?>
</div>

<div class="nitko">
<div class="delbtn">
  <a href="kantina2.php">NAZAD</a>
</div>
<h2>Dodaj Meni</h2><br/>
<form name="form" method="post">
<select name="Dan" id="Dan">
<option selected="yes">Odaberite Dan</option>
<option value="Pon">Ponedjeljak</option>
<option value="Uto">Utorak</option>
<option value="Sri">Srijeda</option>
<option value="Cet">Četvrtak</option>
<option value="Pet">Petak</option>
</select>


<select name="Menza" id="Menza">
<option selected="yes">Odaberite Menzu</option>
<option value="Pon">MINI</option>
<option value="Uto">INDEX</option>
<option value="Sri">KAMPUS</option>

</select>




<input type="hidden" name="new" value="1" />
<p><input type="text" name="Id" placeholder="Broj menija" required /></p>
<p><input type="text" name="Juha" placeholder="Juha" required /></p>
<p><input type="text" name="Gl_Jelo" placeholder="Gl_Jelo" required /></p>
<p><input type="text" name="Prilog" placeholder="Prilog" required /></p>
<p><input type="text" name="Salata" placeholder="Salata" required /></p>
<p><input type="text" name="Desert" placeholder="Desert" required /></p>

<p><input class="nitko2" name="submit" type="submit" value="Edit meni" /></p>
</form>
</div>
</html>
