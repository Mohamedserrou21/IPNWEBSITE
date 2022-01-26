<?php 

			
if (isset($_POST['submit']) ) {
	include "../Lancer Projet/config.php";

	
	
        $phone = $_POST['phone'];
	 $fax = $_POST['fax'];
	 $email = $_POST['email'];
	 $adress = $_POST['adress'];
	  
	  
     
		
	
	
			
				
				
				
				$sql = "INSERT INTO `contact`  (  `phone`,`fax`,`email`,`adress`) VALUES ('$phone','$fax','$email','$adress') ";
				mysqli_query($conn, $sql);
				header("Location: contact.php");
			}else   {
				$em = "You can't upload files of this type";
		        header("Location: contact done.php?error=$em");
			}
		