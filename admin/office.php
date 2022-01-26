
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $fetch_info['name'] ?>  | IPN Admin</title>
    <link rel="stylesheet" href="office.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	 
	  <link rel="icon" type="image/png" href= "../agence-communication-imprimerie-removebg-preview.png">
	   
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3 style="font-style:italic">IPN <span> </span><span>Administration</span></h3>
      </div>
      <div class="right_area">
        <a href="logout-user.php" class="logout_btn">Logout</a>
      </div>
    </header>
    
    <div class="sidebar">
      <center>
        <img src= "../agence-communication-imprimerie-removebg-preview.png"="profile_image" alt="">
        
		  <h4 style="font-style:italic"><?php echo "" . $fetch_info['name'] . ""; ?> <i class="fa fa-circle"  style="color: green ;font-size: 9px; " ></i></h4>
      </center>
		
      <a href="admin.php"><i class="fas fa-desktop"></i><span>Voir les demandes</span></a>
      
      <a href="abbone.php"><i class="fas fa-chart-bar"></i><span>Subscribes</span></a>
		<a href= "probleme.php"><i class="fas fa-exclamation-triangle"></i><span>Reported</span></a>
			<a href= "articles.php"><i class="far fa-newspaper"></i><span>Articles</span></a>
		<a href= "gallery.php"><i class="fas fa-photo-video"></i><span>Gallery</span></a>
		<a href= "portofolio.php"><i class="fas fa-feather-alt"></i><span>Potofolio</span></a>
		<a href= "sponsor.php"><i class="fab fa-accusoft"></i><span>Sponsor</span></a>
		<a href= "contact.php"><i class="far fa-address-book"></i></i><span>Contact</span></a>
		
		
		
     
    </div>
   

    <div class="content"></div>

  </body>
</html>


































































































<!---->
