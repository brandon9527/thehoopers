	<?php
		session_start();
		
		$mysql_host = "127.0.0.1";
		$mysql_user = "root";
		$mysql_pass = "";
		$mysql_db = "hoopers";
									
		$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
		if($con -> connect_error){
			die("Connection failed: " . $con -> connect_error);
		}
		
		if(!isset($_SESSION['userSession'])){
			header("Location: login.php");
		}
		
		$query = $con->query("SELECT * FROM signup WHERE sign _id = ".$_SESSION['userSession']);
		
		if(isset($_POST['submit'])){
			$brand = $con->real_escape_string(trim($_POST['brand']));
			$modelname = $con->real_escape_string(trim($_POST['modelname']));
			
			$query = "INSERT INTO request(request_brand, request_modelname)
					Values('$brand', '$modelname')";
					
			if($con->query($query)){
				$msg = "<div class = 'alert alert-success'>
							<span class= 'glyphicon glyphicon-info-sign'></span> 
							&nbsp; Thank You, Your request has been sent
						</div>";
				
			}
			
			else{
				$msg = "<div class = 'alert alert-danger'>
							<span class= glyphicon glyphicon-info-sign'></span> 
							&nbsp; Error while sending
						</div>";
			}
			$con->close();
			
		}
		
	?>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The HOOPERS</title>
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' 
	rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css"><!--CSS of animation-->
	<link rel="stylesheet" href="css/icomoon.css"><!--CSS of icomoon icons fonts-->
	<link rel="stylesheet" href="css/bootstrap.css"><!--bootstrap css-->
	<link rel="stylesheet" href="css/superfish.css"><!--CSS of superfish-->
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/modernizr-2.6.2.min.js"></script> <!--Javascript modernizr-->
	
	<div class="fh5co-parallax" style="background-image: url(images/gasol.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Request</h1>
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
							<h3 class="section-title">Request for new Shoes or Basketballs</h3>
						</div>
						
						<?php
							if(isset($msg)){
								echo $msg;
							}
							
							else{}
						?>
					
						<div class="col-md-6 animate-box">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Brand" name="brand">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Model Name" name="modelname">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary" name="submit">
									</div>
									
									<div class="form-group">
										<a href="logout.php" class="btn btn-primary">Log out</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
	</div>
	'
<?php
	require('footer.php');
?>
