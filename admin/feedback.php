<?php
  include "navbar.php";
  include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Feedback</title>
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
          section
          {
              margin-top: -20px;
              margin-right: 0px;
          }
          a
          {
              font-family: sans-serif;
          }
          .navbar-inverse 
          {
          background-color: #222;
          border-color:#222222;
         }
          .box4
          {
          padding: 10px;
          margin: 25px auto;
          width: 900px;
          height: 500px;
          background-color: #a58761e3;
          opacity: 0.8;
          color: #1d0101;
          }

          .form-control
          {
            height: 70px;
            width: 75%;
          }

         .navbar 
         {
         border-radius: 0px;
         }
         .navbar
         {
         position: relative;
         min-height: 50px;
         margin-bottom: 20px;
         border: 0px solid transparent;
         }
        body
        {
        background-image: url("images/background4.jpg"); 
        } 

        .scroll
    	  {
    		width: 100%;
    		height: 260px;
    		overflow: auto;
      	}
      </style>
  </head>
  <body>
    <div class="box4">
      <h4>If you have any suggestions or questions please comment below.</h4>
      <form action="" method="post">
        <input class="form-control" type="text" name="comment" placeholder="Write something here..."><br>
        <input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 85px; height: 30px;">
      </form>
      <br><br>
	<div class="scroll">
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('','Admin','$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
              echo "<td>"; echo $row['username']; echo "</td>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				}

			}

			else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
              echo "<td>"; echo $row['username']; echo "</td>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
			}
		?>



    </div>
    </div>
  </body>
</html>