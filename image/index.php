<!DOCTYPE html>
<html>
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
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	
	
	
	
	<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <a href= "../index.php" ><img class="logo" src=   "../img/logo-hd-white.png"></a>
            <ul class="menu">
                <li><a href= "../index.php" class="menu-btn">Home</a></li>
                <li><a href= "../about ipn/about.php" class="menu-btn">About</a></li>
				<li><a href= "../Lancer Projet/index.php" class="menu-btn">Start projets</a></li>
                <li><a href= "../contact us/PHPMailer-5.2-stable/index.php" class="menu-btn">Contact Us</a></li>
                
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Donner votre avis à</div>
                <div class="text-2">imagerie pub neon</div>
                <div class="text-3">Service <span class="typing"></span></div>
                <a href="#Lancerprojet">Signaler le probléme</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    

    <!-- services section start -->
    

    <!-- contact section start -->
    <section class="contact" id="Lancerprojet">
        <div class="max-width">
            <h2 class="title">Aidez-nous à améliorer nos compétences et nos service de IPN
</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Avec une simple clique</div>
                    <p>Dites-nous si vous avez des idées susceptibles d’améliorer nos produits. Si vous avez besoin d’aide pour résoudre un problème spécifique.</p>
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
                    <div class="text">Comment pouvons-nous nous améliorer ?</div>
					<div id="error_message">
     
  </div>
                    <form id="myform" onsubmit = "return validate();" class="contact-form" action="upload.php"
           method="post"
           enctype="multipart/form-data">
                       
						 <div class="field">
                            
                                <input type="email"  name="email" class="email-input" placeholder="Entrer votre email" id="email">
                            
                        </div>
						 
						
						
						<div class="field">
						<select id="service" name="domaine" id="project" value=" select project"  >
							  <option value="select project"  placeholder="select project"> choissisez un domaine</option>
  <option value="Connexion">Connexion</option>
  <option value="Performances">Performances</option>
  <option value="services">Services</option>
							 <option value="Autres">Autres</option>
</select>
							</div>

						
                       
                        <div class="field textarea">
                            <textarea id="message" class="message"  name="probleme" cols="30" rows="10" placeholder="expliquez-nous le problémes en quelques mots" ></textarea>
                        </div>
						<div class="field">
                            
                                <input type="file" name="my_image" id="societe" class="fullname" placeholder=" nom societe"  accept="image/png, image/jpeg">
                            
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="submit"  >Envoyer le rapport</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section start -->
    <footer>
        <span>Created By <a href= "../index.php">IPN</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
	
     
	<script >
	




    // Regex Pattern: /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/
function validate(){
	
	var message = document.getElementById("message").value;
	
 
  var email = document.getElementById("email").value;
  
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
	
	if(message.length < 5){
    text = "Please Enter valid message";
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