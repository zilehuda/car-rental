<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo" style="color:white">Car Rental System</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<a href="seller/account.php">Seller Login</a>
					<a href="account.php">Buyer Login</a>
					<a href="login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="../seller/index.php">Home</a></li>
								<li><a href="../seller/status.php">View Status</a></li>
								<li><a href="../seller/message_admin.php">Message Admin</a></li>
							</ul>
					<a href="../admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>