<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Books</title>
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
         
        tr:nth-child(even){background-color: #f2f2f2}

        th 
        {
        background-color: #04AA6D;
        color: white;
        }

        .srch
        {
          padding-left: 1050px;
          margin-top: -10px;
        }

      </style>
  </head>
  <body>

  <div class="srch">
    <form class="navbar-form" method="post" name="form1">
        <input class="form-control" type="text" name="search" placeholder="Search Here..." required="">
        <button style="background-color: #04AA6D;" type="submit" name="submit" class="btn btn-default">
           <span class="glyphicon glyphicon-search"></span>
        </button>
    </form>
  </div>  

  <?php
    if(isset($_POST['submit']))
      {
        $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%'");

        if(mysqli_num_rows($q)==0)
        {
          echo "<p style='font-size:20px; margin-left:550px; margin-top:20px;'>No Results Found! Try Again.</p>";
        }
        else
        {
        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color: #6db6b9e6';'>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "Name of the Book"; echo "</th>";
        echo "<th>"; echo "Name of Authors"; echo "</th>";
        echo "<th>"; echo "Edition"; echo "</th>";
        echo "<th>"; echo "Category"; echo "</th>";
        echo "<th>"; echo "Status"; echo "</th>";
        echo "<th>"; echo "Quantity"; echo "</th>";
		  	echo "</tr>";	

			 while($row=mysqli_fetch_assoc($q))
			 {
				echo"<tr>";
        echo "<td>"; echo $row['id']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['authors']; echo "</td>";
        echo "<td>"; echo $row['edition']; echo "</td>";
        echo "<td>"; echo $row['category']; echo "</td>";
        echo "<td>"; echo $row['status']; echo "</td>";
        echo "<td>"; echo $row['quantity']; echo "</td>";
        echo "</tr>";  
       }
       echo "</table>";  
      }
    } 
    else
    {
      $res=mysqli_query($db,"SELECT * FROM `books`;");

      echo "<table class='table table-bordered table-hover'>";
      echo "<tr style='background color: white;'>";
        
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "Name of the Book"; echo "</th>";
        echo "<th>"; echo "Name of Authors"; echo "</th>";
        echo "<th>"; echo "Edition"; echo "</th>";
        echo "<th>"; echo "Category"; echo "</th>";
        echo "<th>"; echo "Status"; echo "</th>";
        echo "<th>"; echo "Quantity"; echo "</th>";
      echo "</tr>";
      
      while($row=mysqli_fetch_assoc($res))
      {
        echo"<tr>";
        echo "<td>"; echo $row['id']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['authors']; echo "</td>";
        echo "<td>"; echo $row['edition']; echo "</td>";
        echo "<td>"; echo $row['category']; echo "</td>";
        echo "<td>"; echo $row['status']; echo "</td>";
        echo "<td>"; echo $row['quantity']; echo "</td>";
        echo "</tr>";
      }
      echo"</table>";
      }


  ?>
 
</body>
</html>