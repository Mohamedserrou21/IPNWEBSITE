<?php 
include "../Lancer Projet/config.php";
if (isset($_GET['id'])) {
    header("Location: compte.php");
}

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "DELETE FROM `admin` WHERE `id`='$user_id'";

	

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>