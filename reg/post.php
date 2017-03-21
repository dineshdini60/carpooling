<?php
session_start();
include_once 'dbconnect.php';
?>
<?php
	$username= $_SESSION['usr_name'];
	$user_id = $_SESSION['usr_id'];
	//echo "$username";
	$post='';
	if (isset($_POST['submit']))
	{
		//echo "$username";

		$car=$_POST['car'];
		//echo "$car";
		$from=$_POST['from'];
		$to=$_POST['to'];
		$date1=$_POST['date'];
		$mobile=$_POST['mobile'];
		$extra=$_POST['extra'];
		$query = "INSERT INTO posts2(car,from1,to1,date1,mobile,extra,user_id) VALUES('$car','$from','$to','$date1','$mobile','$extra','$user_id')";
		$result = mysqli_query($con,$query);
		if($result)
			echo "posted";
		else
			echo "Not posted";
	}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/button.css" type="text/css" />
	<title>post page</title>
</head>


<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">carpooling!</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<br/>
				<br/>
				<br/>

				<a href="search.php"><button class="button button3" type="button">search</button></a>
				<a href="post.php"><button class="button button1" type="button">post</button></a>

				<a href="view.php"><button class="button button2" type="button">view all</button></a>

				<?php
				 } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>






<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form action="post.php" method="POST">
				<fieldset>
					<legend>Your Post</legend>

					<div class="form-group">
						<label for="name">Type of Car</label>
						<input type="text" name="car" placeholder="Enter car type or model"  class="form-control" />
						
					</div>
					
					<div class="form-group">
						<label for="name">starting point</label>
						<input type="text" name="from" placeholder="enter the starting point of journey" required="" class="form-control" />
						
					</div>

					<div class="form-group">
						<label for="name">ending point</label>
						<input type="text" name="to" placeholder="enter the ending point of journey" required class="form-control" />
						
					</div>

					<div class="form-group">
						<label for="name">Date of journey</label>
						<input type="text" name="date" required placeholder="dd-mm-yyyy" class="form-control" />
						
					</div>
					<div class="form-group">
						<label for="name">mobile number</label>
						<input type="text" name="mobile" placeholder="mobile number of travelling person"  class="form-control" />


						<div class="form-group">
						<label for="name">any extra details</label>
						<input type="text" name="extra" placeholder="extra details like time of journey"  class="form-control" />

					<div class="form-group">

						<input type="submit" name="submit" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			
		</div>
	</div>
</html>