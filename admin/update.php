<?php 
include "../Lancer Projet/config.php";
if (isset($_GET['user_id'])) {
    header("Location: admin.php");
}


	if (isset($_POST['update'])) {
		 $societe  = $_POST['societe'];
        $username  = $_POST['username'];
		$user_id = $_POST['user_id'];
        $useremail = $_POST['useremail'];
	    $ville = $_POST['ville'];
	 $Telephone= $_POST['Telephone'];
        $secteur   = $_POST['secteur'];
	  $service = $_POST['service'];
        $message    = $_POST['message'];

		
		$sql = "UPDATE `demande` SET `societe`='$societe',`username`='$username',`useremail`='$useremail',`ville`='$ville',`Telephone`='$Telephone',`secteur`='$secteur',`service`='$service',`message`='$message' WHERE `id`='$user_id'";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			
			header("Location: admin.php");
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}



if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "SELECT * FROM `demande` WHERE `id`='$user_id'";

	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$societe = $row['societe'];
			$username = $row['username'];
			$useremail = $row['useremail'];
			$ville  = $row['ville'];
			$Telephone = $row['Telephone'];
			$secteur = $row['secteur'];
			$service = $row['service'];
			$message = $row['message'];
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
	textarea {
  width: 500px;
  height: 100px;
}
	</style>
<link rel="icon" type="image/png" href= "../agence-communication-imprimerie-removebg-preview.png">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
		
<h2>Demande Update Form</h2>

		<form action="" method="post">
		  <fieldset>
		    <h3>Personal information:</h3>
		    societe:<br>
		    <input type="text" name="societe" value="<?php echo $societe; ?>">
		    
		    <br>
		   user name:<br>
		    <input type="text" name="username" value="<?php echo $username; ?>">
			  <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="useremail" value="<?php echo $useremail; ?>">
		    <br>
		    ville:<br>
		    <input type="text" name="ville" value="<?php echo $ville; ?>">
		    <br>
			  Telephone:<br>
		    <input type="text" name="Telephone" value="<?php echo $Telephone; ?>">
		    
		    <br>
			  secteur:<br>
		    <input type="text" name="secteur" value="<?php echo $secteur; ?>">
		    
		    <br>
			  service:<br>
		    <input type="text" name="service" value="<?php echo $service; ?>">
		    
		    <br>
			  message:<br>
			  <textarea type="text" name="message" ><?php echo $message; ?></textarea>
		    
		    <br>
		    
		    
		    <input type="submit" value="Update" name="update">
			 
		  </fieldset>
			
		</form>
		
			

		</body>
		</html>




	<?php
	} else{
		
		header('Location: admin.php');
	}

}
?>