<?php 
			
 
include "../Lancer Projet/config.php";











if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "SELECT * FROM `gallery` WHERE `id`='$user_id'";

	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
			
			$categorie = $row['categorie'];
			$new_img_name = $row['image_url'];
			
			$id = $row['id'];
		}

	?><head>
	<title> Ipn-Imagerie pub neon</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	form {
  
		
		 position: absolute;
   left: 50%;
   top: 50%;
   width: 500px;
   margin-left: -250px;
   margin-top: -250px;
		
}
input {
  border: none;
  border-bottom: 2px solid rgba(128, 128, 128, 0.479);
  font-size: 20px;
  width: 100%;
  outline: none;
  color: #4070f4;
  background-color: transparent;
}
	h2{
		text-align: center;
	}
	body{
		
		background-color: #A8A2A2;
	}
input::placeholder {
  opacity: 0.5;
  color:  #4070f4;
  font-family: "Montserrat";
}
form ion-icon {
  position: absolute;
  right: 0;
  font-size: 20px;
  opacity: 0.5;
  color: #4070f4;
}
	</style>
<link rel="icon" type="image/png" href= "../agence-communication-imprimerie-removebg-preview.png">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
		
<h2>Image Update Form</h2>

		<form action="up image.php" method="post" enctype="multipart/form-data">
		  <fieldset>
		    <h3>Image information:</h3>
		    Image-Id:<br>
		     <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    
		    <br>
		   Categorie:<br>
		     <select name="categorie" id="project" value=" <?php echo $categorie; ?>" >
							  <option value="select project"  placeholder="select project"> Select category</option>
  <option value="Communication">Communication</option>
  <option value="Digital">Digital</option>
  <option value="Goodies">Goodies</option>
							 <option value="AMÉNAGEMENT D’ESPACES">AMÉNAGEMENT D’ESPACES</option>
</select>
		    <br>
		   
			  image:<br>
		    <input type="file" name="my_image"  accept="image/png, image/jpeg" value="<?php echo $new_img_name; ?>">
			   <input type="hidden" name="my_image" value="<?php echo $new_img_name; ?>">
		    <br>
		    
		    
		    <br><br>
		    <input type="submit" value="Update" name="update">
			 
		  </fieldset>
			
		</form>
		
			

		</body>
		</html>




	<?php
	} else{
		
		header('Location: compte.php');
	}

}
?>