<?php
		session_start();
		$mysql_host = "127.0.0.1";
		$mysql_user = "root";
		$mysql_pass = "";
		$mysql_db = "hoopers";
									
		$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
		
		if ($con -> connect_error){
			die("Could not connect: " . mysqli_connect_error());
		}
		
		if(isset($_SESSION['userSession'])!=""){
			header("Location: request.php");
		}
		
		if(isset($_POST['login'])){
			$username = $con -> real_escape_string(trim($_POST['username']));
			$password = $con -> real_escape_string(trim($_POST['password']));
			
			$query = $con -> query ("SELECT signup_id, signup_username, signup_password FROM signup WHERE signup_username = '$username'");
			$row = $query->fetch_array();
			
			if($password == $row['signup_password']){
				$_SESSION['userSession'] = $row['signup_id'];
				header("Location: request.php");
			}
			
			//set error message
			else{
				$msg = "<div class = 'alert alert-danger'>
							<span class='glyphicon glyphicon-info-sign'></span> 
							&nbsp; Username or password invalid
						<div>";
			}
			$con->close();
		}
	?>
<!-- calling header.php -->
<?php
	require('header.php');
?>

	<!-- background image of login page header -->
	<div class="fh5co-parallax" style="background-image: url(images/lbpos.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Login</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	

	
	<div id="fh5co-contact">
			<div class="container">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-6 animate-box">					
							<div class="row">
								<div class="col-md-8">
									<?php
										if (isset($msg)) {	
											echo $msg;
										}
									?>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username" name="username" required />
									</div>
								</div>
								
								<div class="col-md-8">
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password" name="password" required />
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" class="btn btn-primary" name="login">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
						
	<!-- calling footer.php -->
	<?php
		require('footer.php');
	?>