<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 32px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
            margin-top: 8px;
            margin-bottom: -5px;
            font-size: 20px;
            font-weight: 200;
		}

	</style>
</head>
<body style="background-color: #004528;">

	<h3 style="text-align: center;color: #fff;">Edit Information</h3>
	<?php
		
		$sql = "SELECT * FROM user WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql);

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h5>First Name : </h5></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h5>Last Name : </h5></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

		<label><h5>Username : </h5></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h5>Password : </h5></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h5>Email Address : </h5></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<br><br>
		<div style="padding-left: -5px;">
			<button class="btn btn-default" type="submit" name="submit">Save all changes.</button></div><br><br>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['first'];
			$last=$_POST['last'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE user SET pic='$pic', first='$first', last='$last', username='$username', password='$password', email='$email' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>
