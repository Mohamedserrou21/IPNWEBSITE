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
    header('Location: login-user.php');
}
?>
<?php 
include "../Lancer Projet/config.php";


$sql = "SELECT * FROM demande";



$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $fetch_info['name'] ?> | IPN-Admin</title>
	

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href= "../agence-communication-imprimerie-removebg-preview.png">

<link rel="stylesheet" href="styles.css">
	
	
	
</head>
<body>
	<div class="container">
		<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<a href="office.php"><h2>Offre <b>Envoye</b></h2></a>
					</div>
		  
					 <div class="row">
					<div class="col-sm-6">
						<a href="" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span><?php echo "Welcome " . $fetch_info['name'] . ""; ?></span></a>
						<a href="logout-user.php" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Logout</span></a>
						<a  href="delete.php?id=" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>vider la cache</span></a>
						
						
						
           </div>
						
					</div>
					</div>
				</div>
			
		
               
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
			<th>societe</th>
		<th>user Name</th>
		
		<th>Email</th>
		<th>ville</th>
			<th>Telephone</th>
			<th>Secteur</th>
			<th>Service</th>
			
			<th>Message</th>
			<th>Date</th>
		<th>Action</th>
	</tr>
		
	</thead>
	</div>
			</div>
	<tbody>
		
		<?php
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['societe']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['useremail']; ?></td>
					<td><?php echo $row['ville']; ?></td>
						<td><?php echo $row['Telephone']; ?></td>
						<td><?php echo $row['secteur']; ?></td>
						<td><?php echo $row['service']; ?></td>
						<td><?php echo $row['message']; ?></td>
						<td><?php echo $row['dt']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>