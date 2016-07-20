<!-- insert to database -->
<?php
	//start of inserting data to database
	session_start();
		
	if(isset($_SESSION['userSession'])!=""){
		header("Location: request.php");
	}
	
	$mysql_host = "127.0.0.1";
	$mysql_user = "root";
	$mysql_pass = "";
	$mysql_db = "hoopers";
									
	$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
		
	if ($con -> connect_error){
		die("Could not connect: " . mysqli_connect_error());
	}
	
	if(isset($_POST['register'])){
		
		$username = $con->real_escape_string(trim($_POST['username']));
		$email = $con->real_escape_string(trim($_POST['email']));
		$password = $con->real_escape_string(trim($_POST['password']));
		$confirmpassword = $con->real_escape_string(trim($_POST['confirmpassword']));

		//select email from signup table and compare with email entered in the form
		$checkmail = $con->query("SELECT signup_email FROM signup WHERE signup_email = '$email'");
		$count = $checkmail->num_rows;

		if($count==0){
			//insert to database
			$query = "INSERT INTO signup (signup_username, signup_email, signup_password, signup_confirmpassword)
			Values('$username', '$email', '$password', '$confirmpassword')";

			//set error message
			if($con->query($query)){
				$msg = "<div class = 'alert alert-success'>
							<span classspan class='glyphicon glyphicon-info-sign'></span> 
							&nbsp; Successfully registered
						</div>";
			} 
				
			//set error message
			else {
				$msg = "<div class = 'alert alert-danger'>
							<span classspan class='glyphicon glyphicon-info-sign'></span> 
							&nbsp; Error while registered
						</div>";
			} 
			   
		} 
			
		//set error message
		else {
			$msg = "<div class = 'alert alert-danger'>
							<span classspan class='glyphicon glyphicon-info-sign'></span> 
							&nbsp; Sorry email already taken
						</div>";
		}
		
		$con->close();
	}
	//end of inserting
?>
		
<!-- calling header.php -->
<?php
	require('header.php');
?>

	<!-- image of signup header -->
	<div class="fh5co-parallax" style="background-image: url(images/lbpos.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Sign Up</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<div id="fh5co-contact">
			<div class="container">
				<form action="" method="post" >
					<div class="row">
						<div class="col-md-6 animate-box">					
							<div class="row">
								<div class="col-md-8">
									<!-- to display the error message before enter username -->
									<?php
										if (isset($msg)) {	
											echo $msg;
										}
										
										else{
											?>
											<div class='alert alert-info'>
												<span class='glyphicon glyphicon-asterisk'></span> 
												&nbsp; all the fields are mandatory
											</div>
										<?php
											
										}
										?>
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username"  name="username" required />
									</div>
								</div>
								
								<div class="col-md-8">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="email" required />
									</div>
								</div>
								
								<div class="col-md-8">
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password" name="password" required />
									</div>
								</div>
								
								<div class="col-md-8">
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required />
									</div>
								</div>
								
								
								
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" class="btn btn-primary" name="register">
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