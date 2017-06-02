<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental System</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
		<?php if(isset($_SESSION['paid'])) { ?>
		<h2 style="text-align: center; color:#CC0000">Thank you for your payment.</h2>
		<?php } ?>
		<h2 style="text-decoration:underline">Your Booking Status</h2>
			<ul class="properties_list">
		<table class="table table-striped">
  <thead>
    <tr>
      <th>Client_id</th>
      <th>Car_id</th>
      <th>Status</th>
      
    </tr>
  </thead>
			<?php
						include 'includes/config.php';
						$b = $_SESSION['email'];
							$qry2 = "SELECT client_id from client where email = '$b' ";

							$log = $conn->query($qry2);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					$client_id = $row['client_id'];
						$sel = "SELECT * FROM car_bookin WHERE client_id = '$client_id' ";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc())
						{

			?>

  <tbody>
    <tr>
      
      <td><?php echo $rws['client_id'] ?></td>
      <td><?php echo $rws['car_id'] ?></td>
   
      <?php if($rws['status']=="Pending"){?>

      <td><?php echo $rws['status'] ?></td>
	   <?php } else if ($rws['payment']=="paid"){?>
	   <td><?php echo $rws['payment'] ?></td>
      <?php } else if ($rws['payment']=="not"){?>
      <td>
      	<form method="post" action="checkout.php">
		<input type="hidden" name="client_id" value="<?php echo $rws['client_id'] ?>"/>
		<input type="hidden" name="car_id" value="<?php echo $rws['car_id'] ?>"/>
	<button class="btn btn-danger " type="submit" name="payment2" value="submit">Pay for it</button>

	</form>
      </td>

      <?php }?>
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
					<p>Sonko Rescue team is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every Kenyan Citizen</p>
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
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Consi.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>