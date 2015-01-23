<!--
Author: Himalya Singh
This file is part of the main 3 homepages of the website
-->

<!DOCTYPE html>
<html lang="en">

	<!-- HEAD -->
	<head>
		<title>Reserve List</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/master.css">
		<link rel="stylesheet" type="text/css" href="css/instancelist.css" />
	</head>
	<!-- END HEAD -->

	<!-- PHP INCLUDE -->	
	<?php
		require('php/loggedin.php');
		//include("php/instancelist.php");
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
			<section class="mainsection">
				<div class="row">
					<p class="heading">Instance List</p>
				</div>
				<div class="row">
					<!-- PHP GENERATED CONTENT -->
				</div>
			</section>
			<!-- END MAIN SECTION -->

		</div>
		<!-- END CONTAINER -->

	</body>
	<!-- END BODY -->

</html>