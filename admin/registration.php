<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css">    
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
         .navbar-inverse {
         background-color: #222;
         border-color:#222222;
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
      </style>


    </head>
    <body>
      <!--<nav class="navbar navbar-inverse">
        <div class="container-fluid">
                <div class="navbar-header"> 
                 <img class="logo" src="images/logo.png" alt="AccessIt!" style="width: 250px; height: 100px;"> 
                </div>
            
            <ul class="nav navbar-nav"> 
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a  style="font-family: sans-serif;" href="login.php"><span class=" glyphicon glyphicon-log-in"> Login</span></a></li>
                <li><a href="login.php"><span class=" glyphicon glyphicon-log-out"> Logout</span></a></li>  
                <li><a href="registration.php"><span class=" glyphicon glyphicon-user">SignUp</span></a></li>
            </ul>
        </div>
    </nav> --> 
       <!-- <header>
        <div class="logo">
                    <img src="images/logo.png" alt="AccessIt!" style="width: 250px; height: 100px;">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="books.html">BOOKS</a></li>
                        <li><a href="login.html">LOGIN</a></li>
                        <li><a href="registration.html">REGISTRATION</a></li>
                        <li><a href="feedback.html">FEEDBACK</a></li>
                    </ul>
                </nav>  
        </header>-->
        <section>
        <div class="reg_img">
          &nbsp
          <div class="box3">
            <h1 style="text-align: center; font-size: 30px; color: #d5d1d0; ">User Registration</h1><br><br>
          <form name="login" action="" method="post" >
            <div class="login">
            <input class="form-control" type="text" name="first" placeholder="First Name" required= ""> <br>
            <input class="form-control" type="text" name="last" placeholder="Last Name" required= ""> <br>
            <input class="form-control" type="text" name="username" placeholder="Username" required= ""> <br>
            <input class="form-control" type="password" name="password" placeholder="Password" required= ""> <br>
            <input class="form-control" type="text" name="email" placeholder="Email" required= ""> <br>
            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px">
            </div> 
          </form>
          <p>
          </p>
          </div>
        </div>
        </section>
         <script src="" async defer></script>

            <?php
        
        if(isset($_POST['submit']))
        {
          $count=0;
          $sql="SELECT username from `admin`";
          $res=mysqli_query($db,$sql);

          while($row=mysqli_fetch_assoc($res))
          {
            if($row['username'] == $_POST['username'])
            {
              $count=$count+1;
            }
          }
          if($count==0)
          {
            mysqli_query($db,"INSERT INTO `admin`(`first`, `last`, `username`, `password`, `email`, `pic`) VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','profile.png');");
             ?> 
            <script type="text/javascript">
            alert("Registration Successful!");
            </script>
            <?php
          }
          else
          {
            ?>
            <script type="text/javascript">
            alert("This Username Already Exists! Try something else.");
            </script>
            <?php
          }
        }

            ?>

    </body>
</html>