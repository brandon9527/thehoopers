<div id="fh5co-team-section">
		<div class="container">
			<div class="row about">
				<div class="row text-center">
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/moltengg7.png);">
							<div class="overlay-section">
								<div class="desc">
									
									<!-- call informtion from database -->
									<?php
										$mysql_host = "127.0.0.1";
										$mysql_user = "root";
										$mysql_pass = "";
										$mysql_db = "hoopers";
									
										$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
										if($con -> connect_error){
											die("Connection failed: " . $con -> connect_error);
										}
									
										$query = "SELECT * FROM basketballs LIMIT 0, 1";
									
										$result = $con -> query($query);
										
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["basketballs_categories"].'</h3>';
											echo '<span>' .$row["basketballs_name"].'</span>';
											echo '<p>' .$row["basketballs_prices"].$row["basketballs_description"].'</p>';
										}
									?>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/moltengm7.jpg);">
							<div class="overlay-section">
								<div class="desc">
								
									<!-- call informtion from database -->
									<?php
										$mysql_host = "127.0.0.1";
										$mysql_user = "root";
										$mysql_pass = "";
										$mysql_db = "hoopers";
									
										$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
										if($con -> connect_error){
											die("Connection failed: " . $con -> connect_error);
										}
									
										$query = "SELECT * FROM basketballs LIMIT 1, 1";
									
										$result = $con -> query($query);
										
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["basketballs_categories"].'</h3>';
											echo '<span>' .$row["basketballs_name"].'</span>';
											echo '<p>' .$row["basketballs_prices"].$row["basketballs_description"].'</p>';
										}
									?>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/neverflat.jpg);">
							<div class="overlay-section">
								<div class="desc">
								
									<!-- call informtion from database -->
									<?php
										$mysql_host = "127.0.0.1";
										$mysql_user = "root";
										$mysql_pass = "";
										$mysql_db = "hoopers";
									
										$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
										if($con -> connect_error){
											die("Connection failed: " . $con -> connect_error);
										}
									
										$query = "SELECT * FROM basketballs LIMIT 2, 1";
									
										$result = $con -> query($query);
										
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["basketballs_categories"].'</h3>';
											echo '<span>' .$row["basketballs_name"].'</span>';
											echo '<p>' .$row["basketballs_prices"].$row["basketballs_description"].'</p>';
										}
									?>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>