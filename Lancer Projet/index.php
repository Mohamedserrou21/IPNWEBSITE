<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagerie-pub-neon</title>
	<link rel="icon" type="image/png" href=  "../agence-communication-imprimerie-removebg-preview.png">
    <link rel="stylesheet" href= "css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<style>
	
	#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
	</style>
</head>
<body>
	<?php 
	if (isset($_POST['submit'])) {
    header("Location: ../demande complet/index.html");
}
include "config.php";
mysqli_set_charset($conn, "utf8");

	
	

	if (isset($_POST['submit'])) {
		
		
		 $societe  = $_POST['societe'];
        $username  = $_POST['username'];
        $useremail = $_POST['useremail'];
	    $ville = $_POST['ville'];
	 $Telephone= $_POST['Telephone'];
        $secteur   = $_POST['secteur'];
	  $service = $_POST['service'];
        $message    = $_POST['message'];
        
       		$sql = "INSERT INTO `demande`(`societe`, `username`, `useremail`, `ville`, `Telephone`, `secteur`, `service`, `message`) VALUES ('$societe',' $username','$useremail','$ville','$Telephone','$secteur','$service','$message')";

		

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

	
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <a href= "../index.php" ><img class="logo" src=   "../img/logo-hd-white.png"></a>
            <ul class="menu">
                <li><a href= "../index.php" class="menu-btn">Home</a></li>
                <li><a href= "../about ipn/index.html" class="menu-btn">About</a></li>
				<li><a href="#contact" class="menu-btn">Start projets</a></li>
                <li><a href= "../contact us/PHPMailer-5.2-stable/index.php" class="menu-btn">Contact Us</a></li>
                
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Lancer votre Projet avec</div>
                <div class="text-2">imagerie pub neon</div>
                <div class="text-3">Service <span class="typing"></span></div>
                <a href="#Lancerprojet">Lancer</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    

    <!-- services section start -->
    

    <!-- contact section start -->
    <section class="contact" id="Lancerprojet">
        <div class="max-width">
            <h2 class="title">Lancer votre project depuis içi</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Avec une simple clique</div>
                    <p>Commençons votre projet et 
Nous allons vous aider à atteindre vos objectifs et faire croître votre entreprise.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-phone-alt"></i>
                            <div class="info">
                                <div class="head">Telephone</div>
                                <div class="sub-title">+212 535 94 20 06</div>
								<div class="sub-title">+212 661 662 021</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">N°16 Résidence Al Fassiya Rue Tunisie VN Fés</div>
                            </div>
							

                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">ipn@gmail.ma</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Remplissez vous la demande</div>
					<div id="error_message">
     
  </div>
                    <form id="myform" onsubmit = "return validate();" class="contact-form" action= "" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="societe" id="societe" class="fullname" placeholder=" nom societe" >
                            </div>
                            <div class="field email">
                                <input type="text" name="username" class="email-input" placeholder="username" id="name" >
                            </div>
                        </div>
						 <div class="fields">
                            <div class="field name">
                                <input type="text" name="useremail" id="email" class="fullname" placeholder="email"  >
								 
                            </div>
                            <div class="field email">
                                <input type="text" id="ville" name="ville" class="email-input" placeholder="ville">
                            </div>
                        </div>
						 <div class="fields">
							 <div class="field name">
                            <input type="text" name="Telephone" id="telephone" class="fullname" placeholder="Telephone" >
								  </div>
							  <div class="field name">
                                <input type="text" name="secteur" id="secteur" class="fullname" placeholder=" secteur d'activité">
                            </div>
                        </div>
						<div class="field">
						<select id="service" name="service" id="project" value=" select project" >
							  <option value="select project"  placeholder="select project"> Select Service</option>
  <option value="Communication">Communication</option>
  <option value="Digital">Digital</option>
  <option value="Goodies">Goodies</option>
							 <option value="AMÉNAGEMENT D’ESPACES">AMÉNAGEMENT D’ESPACES</option>
</select>
							</div>

						
                       
                        <div class="field textarea">
                            <textarea id="message" class="message"  name="message"cols="30" rows="10" placeholder="Message.." ></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="submit"  >Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section start -->
    <footer>
        <span>Created By <a href= "../index.php">IPN</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
		<span>| <a href=  "../image/index.php">Signaler un probléme</a> </span>
    </footer>
<script >
	




    // Regex Pattern: /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/
function validate(){
	var societe = document.getElementById("societe").value;
  var name = document.getElementById("name").value;
	var ville = document.getElementById("ville").value;
	
	var message = document.getElementById("message").value;
	
  var secteur = document.getElementById("secteur").value;
  var telephone = document.getElementById("telephone").value;
  var email = document.getElementById("email").value;
  
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
	if(societe.length < 3){
    text = "Please Enter valid Name societe";
    error_message.innerHTML = text;
    return false;
  }
  if(name.length < 3){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
	if(ville.length < 3){
    text = "Please Enter valid ville";
    error_message.innerHTML = text;
    return false;
  }
	if(message.length < 5){
    text = "Please Enter valid message";
    error_message.innerHTML = text;
    return false;
  }
	
	
  if(secteur.length < 2){
    text = "Please Enter Correct secteur";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(telephone) || telephone.length != 10){
    text = "Please Enter valid Phone Number (06....)";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
	
  
  
  return true;
}
	
									  
	</script>
    <script src="script.js"></script>
</body>
</html>
