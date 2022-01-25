<?php
    session_start();
    include "connection.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                    <div class="navbar-header">
                        <!--<a class="navbar-brand active">AccessIt!</a>  -->  
                     <img class="logo" src="images/logo.png" alt="AccessIt!" style="width: 250px; height: 100px;"> 
                    </div>
                
                <ul class="nav navbar-nav" style="font: size 30px; font-family: Arial, Helvetica, sans-serif;"> 
                    <li><a href="index.php">Home</a></li>
                    <li><a href="books.php">Books</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>

                <?php
                    if(isset($_SESSION['login_user']))
                    {
                    ?>    
                    <ul class="nav navbar-nav" style="font: size 30px; font-family: Arial, Helvetica, sans-serif;">
                      <li><a href="feedback.php">Feedback</a></li>
                      <li><a href="profile.php">Profile</a></li>    
                      <li><a href="fine.php">Total Fines</a></li>
                    </ul>                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="profile.php">
                        <div style="color:white; margin-top: 0px; margin-right:20px;">
                        <?php
                        echo "<img class='img-circle profile_img' height=50 width=50 src='images/".$_SESSION['pic']."'>";
                        echo "   ".$_SESSION['login_user'];
                        ?>
                        </div>                     
                        </a></li>
                    <li><a href="logout.php"><span class=" glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                    </ul> 
                    <?php
                    }
                
                    else
                    {   ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a  style="font-family: Arial, Helvetica, sans-serif;" href="login.php"><span class=" glyphicon glyphicon-log-in"> LOGIN</span></a></li>  
                    <li><a href="registration.php"><span class=" glyphicon glyphicon-user"> SIGNUP</span></a></li>
                </ul>
                <?php
                    }
                ?>    
            </div>
        </nav>
        <?php
      if(isset($_SESSION['login_user']))
      {
        $day=0;

        $exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
        $res= mysqli_query($db,"SELECT * FROM `issue_book` where username ='$_SESSION[login_user]' and approve ='$exp' ;");
      
      while($row=mysqli_fetch_assoc($res))
      {
        $d= strtotime($row['return']);
        $c= strtotime(date("Y-m-d"));
        $diff= $c-$d;

        if($diff>=0)
        {
          $day= $day+floor($diff/(60*60*24)); 
        } //Days
        
      }
      $_SESSION['fine']=$day*1;
    }
    ?>
        <script src="" async defer></script>
    </body>
</html>