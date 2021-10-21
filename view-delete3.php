<?php
require('db.php');


include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="delbtn">


<a href="kantina3.php">NAZAD</a></div>
<div class="form">

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>

<th><strong>Id Komentara</strong></th>
<th><strong>Komentar</strong></th>
<th><strong>User Name</strong></th>
<th><strong>DATE</strong></th>



<th><strong>Delete</strong></th>

</tr>
</thead>
<tbody>
<?php

$sel_query="Select * from komentar_menze3 ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td align="center"><?php echo $row["Id_Comm_Menze3"]; ?></td>
<td align="center"><?php echo $row["Komentar"]; ?></td>
<td align="center"><?php echo $row["Username"]; ?></td>
<td align="center"><?php echo $row["DATE"]; ?></td>




<td align="center">
<div class="delbtn">

<a href="delete3.php?Id_Comm_Menze3=<?php echo $row["Id_Comm_Menze3"]; ?>">Delete</a>

</div>

</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
