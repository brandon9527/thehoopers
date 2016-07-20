<div id="fh5co-team-section">
		<div class="container">
			<div class="row about">
				<div class="row text-center">
				
				<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/airmax.jpg);">
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
									
									$query = "SELECT * FROM shoes LIMIT 0, 1";
									
									$result = $con -> query($query);
									
									if($row = $result->fetch_assoc()){
										echo '<h3>'.$row["shoes_categories"].'</h3>';
										echo '<span>' .$row["shoes_name"].'</span>';
										echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
									}
									
									
								?>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/hyperlive.jpg);">
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
										
										$query = "SELECT * FROM shoes LIMIT 1, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>

									</p>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/hyperrev2016.png);">
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
									
										$query = "SELECT * FROM shoes LIMIT 2, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
								
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/zoom.jpg);">
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
									
									$query = "SELECT * FROM shoes LIMIT 3, 1";
									
									$result = $con -> query($query);
									
									if($row = $result->fetch_assoc()){
										echo '<h3>'.$row["shoes_categories"].'</h3>';
										echo '<span>' .$row["shoes_name"].'</span>';
										echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
									}
									
									
								?>
	
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/cp3xiae.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 4, 1";
									
										$result = $con -> query($query);
										
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/jordanfly.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 5, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/jordanxxx.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 6, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/kd8.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 7, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
								
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/kd9.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 8, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/kobe11.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 9, 1";
									
										$result = $con -> query($query);
										
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
										
									?>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/mentality.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 10, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
								?>
								
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/kyrie2.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 11, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}

								?>
								
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/lebron13.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 12, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
								
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/lebron13bl.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 13, 1";
										
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/curry2l.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 14, 1";
										
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
									
									</p>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/curry2.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 15, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
									?>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-15">
						<div class="team-section-grid animate-box" style="background-image: url(images/curry2.5.jpg);">
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
									
										$query = "SELECT * FROM shoes LIMIT 16, 1";
									
										$result = $con -> query($query);
									
										if($row = $result->fetch_assoc()){
											echo '<h3>'.$row["shoes_categories"].'</h3>';
											echo '<span>' .$row["shoes_name"].'</span>';
											echo '<p>' .$row["shoes_prices"].$row["shoes_description"]. '</p>';
										}
									
									
								?>
								
									</p>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
				</div>
			</div>
		</div>
	</div>