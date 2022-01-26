<?php 

			
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "../Lancer Projet/config.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	
        $name = $_POST['sponsor_name'];
	  
	  
     
		
	
	if ($error === 0) {
		if ($img_size > 2000000) {
			$em = "inserer une image correct";
		    header("Location: image done.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 
		

			if (in_array($img_ex_lc, $allowed_exs)  ) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				 
				$img_upload_path = '../admin/sponsor/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				
				
			
				
				
				
				$sql = "INSERT INTO `sponsor`  (  `sponsor_name`, `image_url`) VALUES ('$name','$new_img_name') ";
				mysqli_query($conn, $sql);
				header("Location: sponsor.php");
			}else   {
				$em = "You can't upload files of this type";
		        header("Location: image done.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: sponsor done.php?error=$em");
	}

}else {
	header("Location: sponsor done.php");
}