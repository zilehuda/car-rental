<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental System</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
</head>
<body style="background-color:lightblue;">

	<section class="">
		<?php
			include '../header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
<form method="post">		
<div class="form-group row">
  <label for="cname" class="col-2 col-form-label">Car Name</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder ="Car name" id="cname" name="cname">
  </div>
</div>
<div class="form-group row">
  <label for="ccompany" class="col-2 col-form-label">Car Company</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Car Company" id="ccompany" name="ccompany">
  </div>
</div>
<div class="form-group row">
  <label for="cmodel" class="col-2 col-form-label">Car Model</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Car Model" id="cmodel" name="cmodel">
  </div>
</div>
<div class="form-group row">
  <label for="cfuel" class="col-2 col-form-label">Car Fuel</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Car Fuel" id="cfuel" name="cfuel">
  </div>
</div>
<div class="form-group row">
  <label for="ccondition" class="col-2 col-form-label">Condition</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="car condition" id="ccondition" name="ccondition">
  </div>
</div>
<div class="form-group row">
  <label for="ctype" class="col-2 col-form-label">Body type</label>
  <div class="col-10">
    <input class="form-control" type="text" value="body type" id="ctype" name="ctype">
  </div>
</div>
<div class="form-group row">
  <label for="cseats" class="col-2 col-form-label">Car seats</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="00" id="cseats" name="cseats">
  </div>
</div>

<div class="form-group row">
  <label for="cyear" class="col-2 col-form-label">Car Year</label>
  <div class="col-10">
    <input class="form-control" type="month" placeholder ="2011-08" id="cyear" name="cyear">
  </div>
</div>


<div class="form-group row">
  <label for="ccolor" class="col-2 col-form-label">Color</label>
  <div class="col-10">
    <input class="form-control" type="color" value="#563d7c" id="ccolor" name="ccolor">
  </div>
</div>
<div class="form-group row">
  <label for="ccolor" class="col-2 col-form-label">price</label>
  <div class="col-10">
    <input class="form-control" type="text" value="#563d7c" id="" name="price">
  </div>
</div>
<button class="btn btn-danger " type="submit" name="submit" value="submit">Submit</button>

</form>


			</ul>
		</div>
	</section>	<!--  end listing section  -->



             	<?php
						if(isset($_POST['submit'])){
							include '../includes/config.php';
							$cname = $_POST['cname'];
							$ccompany = $_POST['ccompany'];
							$cmodel = $_POST['cmodel'];
							$cfuel= $_POST['cfuel'];
							$ccondition = $_POST['ccondition'];
							$ctype = $_POST['ctype'];
								$cseats = $_POST['cseats'];
							$cyear 	= $_POST['cyear'];
							$ccolor =  $_POST['ccolor'];
							$price =  $_POST['price'];
							$cimage = $_POST['cname'].'.'."jpg";

							$b = $_SESSION['email'];
							$qry2 = "SELECT seller_id from seller where email = '$b' ";

							$log = $conn->query($qry2);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					$client_id = $row['seller_id'];
							
							$qry = "INSERT INTO caradd (seller_id,car_id,cname,ccompany,cmodel,cfeul,ccondition,ctype,cseats,cyears,ccolor,status,cimage,price)
							VALUES('$client_id','','$cname','$ccompany','$cmodel','$cfuel','$ccondition','$ctype','$cseats','$cyear','$ccolor','pending','$cimage',$price)";
							$result = $conn->query($qry);
							
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Data Entered.\");
											window.location = (\"index.php\")
											</script>";
							
						}
						
					  ?>
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