<?php

	include_once('php/dbconnect.php');

	function outputspeciestable(){
	
		$con = opendatabase();
		$query = "SELECT * FROM Species WHERE SpeciesHidden = '0' && SpeciesHidden = '0'"; 
		
		
		if(isset($_GET['id'])){
			$name = mysqli_real_escape_string($con, $_GET['id']);
			$query = $query . " && ReserveId = '" . $name . "'";		
		}
		
		$result = mysqli_query($con, $query);
	
		if(mysqli_num_rows($result) == 0){
			echo "There are no species yet.";
		}
	
		while ($row=mysqli_fetch_row($result))
		{?>
			<hr />
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-2">
							<!-- PUT PICTURE HERE -->
							<img src="<?if(strlen($row['9']) > 3){echo $row['9'];}else{echo "res/noimg.jpg";} ?>" class="img-responsive">
							<?php// echo $row['9']; ?>
						</div>
						<div class="col-10">
							<div class="row">
								<div class="col-12">
									<!-- GENERATED NAME HERE -->
									<?php echo $row['1']; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-4">
									<!-- GENERATED DAFOR HERE -->
									<strong>DAFOR: </strong><?php echo $row['2']; ?><br />
									<strong>Plant Image: </strong><u><?php echo "<a href=" . $row['9'] . ">Plant</a>"; ?></u><br />
									<strong>Area Image: </strong><u><?php echo "<a href=" . $row['10'] . ">Area</a>"; ?></u>
								</div>
								<div class="col-4">
									<!-- GENERATED LOCATION HERE -->
									<strong>Lat: </strong><?php echo $row['4']; ?> <strong>Lng: </strong><?php echo $row['5']; ?>
								</div>
								<div class="col-4">
									<!-- GENERATED TIME/DATE HERE -->
									<strong>Time/Date: </strong><?php echo $row['6']; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<!-- GENERATED DESCRIPTION HERE -->
									<?php  echo "Description: " . $row['3']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		// Free result set
		mysqli_free_result($result);
		closedatabase();
	}

?>
