<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE caradd SET status = 'Approved' WHERE car_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Approved';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
