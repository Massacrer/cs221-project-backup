
<!--
Author: Katarzyna Turczynska
This page is redirected to from the add reserve page.
-->
<!DOCTYPE html>
<html lang="en">
	<!-- HEAD -->
	<head>
		<link rel="shortcut icon" href="res/icon.ico">
		<title>Edit Reserve</title>
		<meta charset="UTF-8" />
		<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/master.css" />
		<link rel="stylesheet" type="text/css" href="css/editreserve.css" />
	</head>
	<!-- END HEAD -->
	
	<!-- PHP INCLUDE -->
	<?php
		require('php/loggedin.php');
		include("php/editreserve.php");
	?>
	<!-- END PHP INCLUDE -->
	
	<!-- BODY -->
	<body>
	
		<!-- CONTAINER -->
		<div class="container">
		
			<!-- NAV BAR -->
			<nav>
				<?php include("navbar.php"); ?>
			</nav>
			<!-- END NAV BAR -->
			
			<!-- MAIN SECTION -->
			<div class="row mainsection">
				<div class="row">
					<div class="col-12">
						<a href="">Edit Reserve</a>
						<hr />
					</div>
				</div>
				<div class="col-12 ">
					<p class="heading">Edit Reserve</p>
					
						To edit one of your reserves, please press the edit button!
						

				</div>
			</div>
			<!-- END MAIN SECTION -->
			
		</div>
		<!-- END CONTAINER -->

	</body>
	<!-- END BODY -->
</html>

    
