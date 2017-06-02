<!DOCTYPE html>
<html lang="en">
<head>
	<title> Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body style="background-color:lightblue;">

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Booking Status</h2>
			<ul class="properties_list">
						<table class="table table-striped">
  <thead>
    <tr>
      <th>car_id</th>
      <th>Car Name</th>
      <th>Car Company</th>
      <th>Car Model</th>
       <th>Car Year</th>
       <th>Car Color</th>
       <th>Status</th>
    </tr>
  </thead>
			<?php
						include '../includes/config.php';
						$b = $_SESSION['email'];
							$qry2 = "SELECT seller_id from seller where email = '$b' ";

							$log = $conn->query($qry2);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					$client_id = $row['seller_id'];
						$sel = "SELECT * FROM caradd WHERE seller_id = '$client_id' ";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc())
						{

			?>

  <tbody>
    <tr>
      
      <td><?php echo $rws['car_id'] ?></td>
      <td><?php echo $rws['cname'] ?></td>
      <td><?php echo $rws['ccompany'] ?></td>
      <td><?php echo $rws['cmodel'] ?></td>
      <td><?php echo $rws['cyear'] ?></td>
      <td><?php echo $rws['ccolor'] ?></td>
      <td><?php echo $rws['status'] ?></td>
    </tr>
    
  </tbody>
  <?php } ?>	
</table>
			
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>car rental sytem team is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every  Citizen</p>
					<ul>
						<li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | CRS
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>