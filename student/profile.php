<?php
  include "navbar.php";
  include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
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
        
         .wrapper
         {
             width: 400px;
             margin: 0px auto;
             color: white;
         }
         .table
         {
             text-align:center;
         }
      </style>
  </head>
  <body style="background-color: #004528;">
  <div class="container">
      <form action="" method="post">
          <button class="btn btn-default" style="float:right; width:70px;" name="submit1" type="submit">Edit</button>
      </form>
      <div class="wrapper">
        <?php

        if(isset($_POST['submit1']))
        {
          ?>
            <script type="text/javascript">
              window.location="edit.php";
            </script>
          <?php
        }

        $q=mysqli_query($db,"SELECT * FROM user where username='$_SESSION[login_user]';");
        ?>
        <h2 style="text-align: center;">My Profile</h2>
        <?php
            $row=mysqli_fetch_assoc($q);

            echo "<div style='text-align:center;'>
            <img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'></div>"
        ?>
            <br><div style='text-align:center;'><b>Welcome, </b> 
        <h4>
            <?php echo $_SESSION['login_user'];  ?>
        </h4>
        </div><br>
        <?php
            echo "<b>";
            echo "<table class='table table-bordered'>";
            echo "<tr>";
              echo "<td>";
                echo "<b> First Name: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['first'];
              echo "</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>";
                echo "<b> Last Name: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['last'];
              echo "</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>";
                echo "<b> Username: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['username'];
              echo "</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>";
                echo "<b> Password: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['password'];
              echo "</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>";
                echo "<b> Email Address: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['email'];
              echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</b>";
        ?>

      </div>
  </div>
    
  </body>
</html>