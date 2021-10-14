<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
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
       
        header
       {
            height: 120px;
            width: 1345px;
            background-color: rgb(35 35 35);
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

        .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        }

        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }  
        
        .btn btn-default:hover
        {
            color: blue;
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
                    <li><a  style="font-family: Arial, Helvetica, sans-serif;" href="login.php"><span class=" glyphicon glyphicon-log-in"> Login</span></a></li>
                    <li><a href="login.php"><span class=" glyphicon glyphicon-log-out"> Logout</span></a></li>  
                    <li><a href="registration.php"><span class=" glyphicon glyphicon-user"> SignUp</span></a></li>
                </ul>
            </div>
        </nav>-->  
        
        <!--<header>
        <div class="logo">
                    <img src="images/logo.png" alt="AccessIt!" style="width: 280px; height: 120px;">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="books.html">Books</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="registration.html">Registration</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                    </ul>
                </nav>  
        </header> -->
        <section>
        <div class="log_img">
          <br><br>
          <div class="box2">
             <br><br>
            <h1 style="text-align: center; font-size: 30px; color: #d5d1d0; font-family: Microsoft Sans Serif">User Login</h1><br><br>
          <form name="login" action="" method="post">
              <div class="login">
                  <input class="form-control" type="text" name="Username" placeholder="Username" required= ""> <br>
            <input class="form-control" type="password" name="Password" placeholder="Password" required= ""> <br>
            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
            </div> 
          <br><br><p style="color: white; padding-Left: 15px; font-size: 14px" >   
            <a style="color: white;" href="">Forgot Password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
            New to 'AccessIt!'? &nbsp;<a style="color: white;" href="registration.php"> Sign Up</a> 
          </p>
        </form>
    </div>
</div>
        </section>

        <?php
          
          if(isset($_POST['submit']))
          {
              $count=0;  
              $res=mysqli_query($db,"SELECT * FROM `user` WHERE username='$_POST[Username]' && password='$_POST[Password]';");
              
              $row= mysqli_fetch_assoc($res);
              $count=mysqli_num_rows($res);
              
              if($count==0)
              {
                  ?>
                <!--<script type="text/javascript">
                alert("Invalid Username or Password. Please check your username and password.");
            </script>-->
            <div class="alert alert-danger" style="width: 600px; margin-left:370px; background-color:#de1313; color: white">
                <strong>
                    Invalid Username or Password. Please check your username and password.
                </strong>
                <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                Invalid Username or Password. Please check your username and password.-->
            </div>
            
            <?php
            }
            else
            {
                $_SESSION['login_user'] = $_POST['Username'];
                $_SESSION['pic'] = $row['pic'];
                
                ?>
                <script type="text/javascript">
                    window.location="index.php"
                    </script>
                <?php
            }
            
        }
        ?>
    </body>
    </html>