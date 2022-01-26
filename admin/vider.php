
	<?php 
include "../admin1/config.php";


if (isset($_GET['id'])) {
    header("Location: admin.php");
}
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "DELETE FROM demande";

	

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}


?>