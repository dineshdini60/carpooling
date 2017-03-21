<?php
session_start();
include_once 'dbconnect.php';
?>

<?php
	function find_username_by_user_id($con,$user_id)
	{
        $query="SELECT name FROM users WHERE id=$user_id";
        $result=mysqli_query($con,$query);
        if($result)
        {
            $row=mysqli_fetch_assoc($result);
            return ($row['name']);
        }
	}
?>









<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/button.css" type="text/css" />
	<title>search</title>
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
			<form action="" method="POST">
				<fieldset>
					<legend>search page</legend>

					<div class="form-group">
						<label for="name">journey date</label>
						<input type="text" name="sdate" placeholder="dd-mm-yyyy"  class="form-control" />
						
					</div>
					
					<div class="form-group">
						<label for="name">starting point</label>
						<input type="text" name="sfrom" placeholder="enter the starting point of journey"  class="form-control" />
						
					</div>

					<div class="form-group">
						<label for="name">ending point</label>
						<input type="text" name="sto" placeholder="enter the ending point of journey"  class="form-control" />
						
					</div>

					

					<div class="form-group">

						<input type="submit" name="submit">
					</div>
				</fieldset>
			</form>
			
		</div>
	</div>
<?php if (isset($_POST['submit'])){
	$sdate = $_POST['sdate']; 
	
	$sfrom = $_POST['sfrom'];
	
	$sto = $_POST['sto'];


?>




<?php
	$query = "SELECT * FROM posts2 WHERE date1 = '$sdate'  AND from1 = '$sfrom' AND to1 ='$sto'";
	$result = mysqli_query($con,$query);
	if($result)
	{
		if (mysqli_num_rows($result)==0) {
			echo "none of the posts match your specification";
		}
		else{
		while($row = mysqli_fetch_assoc($result))
		{
			$username = find_username_by_user_id($con,$row['user_id']);
			$vcar = $row['car'];
			$vfrom1 = $row['from1'];
			$vto1 = $row['to1'];
			$vdate1 = $row['date1'];
			$vmobile = $row['mobile'];
			$vextra = $row['extra'];
			?>
<br/>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form action="post.php" method="POST">
				<fieldset>
					<div class="form-group">
						<label for="name">Type of Car</label>
						<?php echo ":-".$vcar;?>

						
					</div>
					
					<div class="form-group">
						<label for="name">starting point</label>
						<?php echo ":-".$vfrom1;?>
						
					</div>

					<div class="form-group">
						<label for="name">ending point</label>
						<?php echo ":-".$vto1 ;?>
						
					</div>

					<div class="form-group">
						<label for="name">Date of journey</label>
						<?php echo ":-".$vdate1; ?>
						
					</div>
					<div class="form-group">
						<label for="name">mobile number</label>
						<?php echo ":-".$vmobile; ?>
						</div>


						<div class="form-group">
						<label for="name">any extra details</label>
						<?php echo ":-".$vextra;?>
						</div>

						<div class="form-group">
						<label for="name">posted by</label>
						<?php echo ":-".$username;?>
						</div>
					
				</fieldset>
			</form>
			
		</div>
	</div>










<?php
			}
		}
	}
}
?>












</body>
</html>