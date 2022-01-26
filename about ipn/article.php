<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPN-imagerie-pub -communication</title>
	<link rel="icon" type="image/png" href=  "../agence-communication-imprimerie-removebg-preview.png">
    <link rel="stylesheet" href="article.css">
	<link rel="stylesheet" href= "style - Copie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
	
    <nav class="navbar">
		
        <div class="max-width">
           <a href="../index.php" ><img class="logo" src=  "../img/logo-hd-white.png"></a>
            <ul class="menu">
				<div class="sticky">
                <li><a href="../index.php" class="menu-btn">Home</a></li>
                <li><a href="about.php" class="menu-btn">About</a></li>
                <li><a href= "../image/index.php" class="menu-btn">signaler probleme</a></li>
			
              <li><a href= "../Lancer Projet/index.php" class="menu-btn">Lancer projet</a></li>
                <li><a href= "../contact us/PHPMailer-5.2-stable/index.php" class="menu-btn">Contact Us</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
			</div>
    </nav>

   
    
   
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Article IPN</h2>
            <div class="about-content">
				<?php 
include "../Lancer Projet/config.php";

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "SELECT * FROM `articles` WHERE `id`='$user_id'";




$result = $conn->query($sql);

}
?>
				<?php
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>
                <div class="column left">
                   <img src="../admin/article/<?=$row['image_url']?>">
                </div>
                <div class="column right">
                    <div class="text"><?php echo $row['titre']; ?> </div>
                    <p> <?php echo $row['text']; ?></p>
					<p style="color: crimson"> <?php echo $row['dt']; ?></p>
                    <a href=  "about.php">return</a>
                </div>
				<?php		}
			}
		?>
            </div>
        </div>
    </section>

	
	
 
 
	
 
 
   
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Notre Mission</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text"> Design</div>
                        <p>Vous faire partager notre passion du métier à travers nos créations et nos solutions.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Vous informer des dernières évolutions dans les domaines de la communication interactive et visuelle.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Fiabilité</div>
                        <p>Anticiper vos besoins grâce à notre proactivité,
                           Vous proposer des solutions innovantes et originales</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

   
	
 
   
    <footer>
        <span>Created By <a href= "../index.php">IPN</a> | <span class="far fa-copyright"></span> 2021 All rights reserved</span>
		<span>| <a href=  "../image/index.php">Signaler un probléme</a> </span>
    </footer>

    <script src="ar.js"></script>
	
</body>
</html>
