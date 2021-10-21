<?php
require('db.php');

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Canteena | Login</title>
    <link rel="stylesheet" href="loginStyle.css">
  </head>

<body>


<div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">REGISTRACIJA</a></li>
        <li class="tab"><a href="#login">PRIJAVA</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Registracija je besplatna!</h1>

          <form action="" method="post"  name="register">

          <div>
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="username2" />
            </div>
			
           
          </div>

          <div class="field-wrap">
            <label>
              Email Adresa<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Lozinka<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="lozinka2"/>
          </div>
		  <div class="field-wrap">
            <label>
              Potvrdite lozinku<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="lozinkaconf"/>
          </div>


          <button type="submit" class="button button-block"/>REGISTRIRAJ ME</button>

          </form>

        </div>

        <div id="login">
          <h1>Dobrodošli nazad!</h1>

          <form action="" method="post" name="login">

            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
          </div>

          <div class="field-wrap">
            <label>
              Lozinka<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="lozinka"/>
          </div>

       
          <button class="button button-block"/>PRIJAVI ME</button>

          </form>

        </div>

      </div><!-- tab-content -->

<?php

session_start();
// LOGIN
if (isset($_POST['username'])){
      

        
	$username =$_REQUEST['username'];
	$lozinka =$_REQUEST['lozinka'];
	$md55=md5($lozinka);
	
	
	
        $query = "SELECT * FROM `korisnik` WHERE username='$username'
	and lozinka='$md55'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
           
	    header("Location: index1.php");
         }else{
			
	echo "
	
<font color='red'><h3>Korisničko ime/lozinka nisu točni</h3></font>";
	}

	}
    
?>
	  
	  
	  
	  <?php



if (isset($_REQUEST['username2'])){

        // REGISTRATION
	
       
	$username =$_REQUEST['username2'];
	$lozinka =$_REQUEST['lozinka2'];
	$email =$_REQUEST['email'];
	
	if($_REQUEST['lozinka2']===$_REQUEST['lozinkaconf']){
		$md555=md5($lozinka);
	$sql_u="SELECT* from korisnik where Username='$username'";
	$sql_e="SELECT* from korisnik where email='$email'";
	$res_u= mysqli_query($con, $sql_u);
	$res_e= mysqli_query($con, $sql_e);
	if(mysqli_num_rows($res_u)>0) {
		
		echo "
	
<font color='red'><h3>Username zauzet!</h3></font>";
	} else if (mysqli_num_rows($res_e)>0) {
		
			echo "
	
<font color='red'><h3>Email u upotrebi!</h3></font>";
	} else {
		$nula=0;
        $query = "INSERT into `korisnik` (`Email`, `Username`, `Lozinka`,`Ovlasti`)
VALUES ('$email','$username', '$md555', '$nula' )";
        $result = mysqli_query($con,$query);
        if($result){
			 header("Location: login.php");
            echo
			"<div class='form'>
<font color='red'><h3>Uspješno ste se registrirali</h3></font>";
        }
    }
}else {
	
	echo "
	
<font color='red'><h3>Lozinke se ne poklapaju!</h3></font>";
}

}

?>
</div> 
<script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  language="JavaScript" type="text/javascript" src="login.js"></script>
</body>

</html>
