<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPN-imagerie-pub -communication</title>
	<link rel="icon" type="image/png" href=  "../agence-communication-imprimerie-removebg-preview.png">
    <link rel="stylesheet" href="style.css">
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
                <li><a href="../index.php" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">Who are IPN?</a></li>
                <li><a href="#teams" class="menu-btn">Articles</a></li>
				 <li><a href="#services" class="menu-btn">Mission</a></li>
              <li><a href= "../Lancer Projet/index.php" class="menu-btn">Lancer projet</a></li>
                <li><a href= "../contact us/PHPMailer-5.2-stable/index.php" class="menu-btn">Contact</a></li>
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
                <div class="text-1">WELCOME IN IPN</div>
                <div class="text-2">imagerie Pub Neon </div>
                <div class="text-3">Service : <span class="typing"></span></div>
				  <a href= "#about">Suivre</a>
                
            </div>
          </div>
      </div>
    </section>

   
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About IPN</h2>
            <div class="about-content">
                <div class="column left">
                    <img src= "images/67-440x440.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text"> IPN est une entreprise de <span class="typing-2"></span></div>
                    <p>Chaque entreprise a sa propre histoire. Qui sommes-nous ? Pourquoi nous sommes-nous lancés dans cette aventure ? Pourquoi sommes-nous aujourd’hui les meilleurs dans notre domaine ? Notre parcours est tout sauf ordinaire.

IPN est une agence de communication à multi-compétences créé en 2003. Reconnus pour notre efficience et notre savoir-faire, nous réalisons au niveau national et à l’international :

Opérations de communication événementielle, publicité, impression numérique, signalétique, décoration et agencement d’intérieur.

Depuis deux décennies, nous avons développé pour le compte de notre clientèle des stratégies novatrices et efficaces en communication et publicité. IPN a réussi à s’adapter aux différents changements d’innovation en offrant le meilleur d’elle-même.</p>
                    <a href=  "#gallery">Show image</a>
                </div>
            </div>
        </div>
    </section>
<section id="gallery">
	<?php 
include "../Lancer Projet/config.php";


$query = "SELECT * FROM gallery";



$result = $conn->query($query);


?>
  <h2 id="about" class="title">Gallery</h2>
	
  <div class="wrapper">
    
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="communication">communication</span>
        <span class="item" data-name="amenagement d'espace">amenagement d'espace</span>
        <span class="item" data-name="goodies">goodies</span>
        <span class="item" data-name="digitale">digitale</span>
        
      </div>
    </nav>
    
    <div class="gallery">
		<?php
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>
				
      <div class="image" data-name="<?php echo $row['categorie']; ?>"><span><img src="../admin/gallery/<?=$row['image_url']?>"></span></div>
      <?php		}
			}
		?>
		
    </div>
  </div>
  
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>
</section>
	
	<?php 
include "../Lancer Projet/config.php";


$sql = "SELECT * FROM articles";



$result = $conn->query($sql);


?>
	
 <section class="teams" id="teams">
	 	
        <div class="max-width">
            <h2 class="title">Article</h2>
			
			
            <div class="carousel owl-carousel">
				<?php
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>
				
					
						
                <div class="card">
					
                    <div class="box">
						
						
						<tbody>
							<tr>
							<td>
                        <img src="../admin/article/<?=$row['image_url']?>">
                        <div class="text"><?php echo $row['titre']; ?></div>
                         <p><?php echo $row['contexte']; ?></p>
						 <p style="color: yellow"> <?php echo $row['dt']; ?></p>
								 <a href="article.php?id=<?php echo $row['id']; ?>">Lire l'article</a>
						</td>
                    </div>
					</tr>
                </div>
						
				<?php		}
			}
		?>
               
                </tbody>
			</table>
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

    <script src="script.js"></script>
	<script src= "images/gallery.js"></script>
</body>
</html>
