<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car rental System</title>
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
		.txt{
			width: 600px;
			height: 200px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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


	<section >
		<div class="wrapper">
		<h2 style="text-decoration:underline">Message Admin Here</h2>
			<ul class="properties_list">
			<form method="post">
				<table>
				
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						
    <div class="form-group">
      <label for="comment">Message:</label>
      <textarea class="form-control" rows="5" id="comment" name="message" ></textarea>
    </div>
  
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						$unamee = $_SESSION['email'];
					
					
					$qy = "SELECT client_id FROM client WHERE email = '$unamee' ";
					$log = $conn->query($qy);
				
					$row = $log->fetch_assoc();
					$client_id = $row['client_id'];
					echo $client_id;

						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$client_id',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>


				<h2> Previous conversation </h2>
				<?php 
                     include 'includes/config.php';
						
						//$message = $_POST['message'];
						$unamee = $_SESSION['email'];
					
					
					$qy = "SELECT client_id FROM client WHERE email = '$unamee' ";
					$log = $conn->query($qy);
				
					$row = $log->fetch_assoc();
					$client_id = $row['client_id'];

					$qy2 = "SELECT * FROM reply WHERE client_id = '$client_id' ";
					$log2 = $conn->query($qy2);
				
					while($row2 = $log2->fetch_assoc())
					{
					


				?>
				<div class="panel panel-primary">
  <div class="panel-heading">YOU => <?php 
 $msg_id=  $row2['msg_id'];
   $qy4 = "SELECT message FROM message WHERE msg_id = '$msg_id' ";
					$log4 = $conn->query($qy4);
				
					$row4 = $log4->fetch_assoc();

  echo $row4['message']?></div>
  <div class="panel-body">
   Admin => <?php echo $row2['reply']?>
  </div>
</div>

<?php }?>
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
					<p>Car Rental system  team is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every  Citizen</p>
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
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | CBS
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>