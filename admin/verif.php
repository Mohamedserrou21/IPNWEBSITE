<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> IPN-administration</title>
    <link rel="stylesheet" href= "verifie.css">
	  <link rel="stylesheet" href=  "outi.css">
	  <link rel="icon" type="image/png" href= "../agence-communication-imprimerie-removebg-preview.png">
	  
  </head>
  <body>
	 <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="../index.php"><img src=  "../img/logo-hd-white.png"></a>
        </div>
        
     
    </div>
  </section>
<div class="login-box">
	
  <h1> <i class="fas fa-lock"></i>Verification</h1>
 

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" id="password" value="">
  </div>

	<input type="button" id="Sign-in" class="btn" value="check" onclick="check()">
</div>
  </body>
  <script type="text/javascript">
  	function check() 
  	{
  		
  	    password = document.getElementById('password').value;
  		if (  password == "ipnadmin")
  		     {
              alert ("verification successfully");
              window.location = "signup-user.php";
              return false;
             }
        else
        {
        	alert ("Entrez vos infos correct SVP !! ");
        	window.location = "index.php";
        }
  	}
  	
  </script>
	
</html>
