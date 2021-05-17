<?php
   include "connection.php";
   include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
     .search{
         margin-left :1050px;
         margin-bottom:20px;

     }

  </style>
  <title>Student information</title>
</head>
<body >

    <h3 style="text-align: center; font-size: 55px; padding-bottom: 15px; padding-top: 15px">Lists Of students</h3>

    <div class="search">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">

    <form class="d-flex" method ="post">
      <input class="form-control me-2" type="text" placeholder="Search username" aria-label="Search" name="search" required>
      <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
    </form>
  </div>
  </div>
</nav>
    <?php
 
         if(isset($_POST['submit']))
         {
            $q= mysqli_query($db, "SELECT Fname, Lname, username, Email, mob FROM student where username LIKE '%$_POST[search]%' ");

            if(mysqli_num_rows($q) == 0 )
            {
              echo "Sorry! No STUDENT found with the username. Try searching again.";
            }
            else
            {
              echo "<table class= 'table table-striped table-hover' >";
          echo "<tr style = 'background-color: grey;'>";
        echo "<th>"; echo "First name"; echo"</th>";
        echo "<th>"; echo "Last name"; echo"</th>";
        echo "<th>"; echo "Username"; echo"</th>";
        echo "<th>"; echo "Email"; echo"</th>";
        echo "<th>"; echo "Mobile no."; echo"</th>";
       
          echo"</tr>";

    while ($row = mysqli_fetch_assoc($q))
       {
        echo "<tr>";
        echo "<td>".$row['Fname']."</td>";
        echo "<td>".$row['Lname']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['mob']."</td>";
       
       
        echo "</tr>";

       }

       echo"</table>";
    

            }
         }
        
        /* if button is not pressed */ 

         else {
          $result=mysqli_query($db, "SELECT Fname, Lname, username, Email, mob FROM student ");
          echo "<table class= 'table table-striped table-hover' >";
          echo "<tr style = 'background-color: grey;'>";
              echo "<th>"; echo "First name"; echo"</th>";
              echo "<th>"; echo "Last name"; echo"</th>";
              echo "<th>"; echo "Username"; echo"</th>";
              echo "<th>"; echo "Email"; echo"</th>";
              echo "<th>"; echo "Mobile no."; echo"</th>";
             
          echo"</tr>";
      
          while ($row = mysqli_fetch_assoc($result))
             {
              echo "<tr>";
              echo "<td>".$row['Fname']."</td>";
              echo "<td>".$row['Lname']."</td>";
              echo "<td>".$row['username']."</td>";
              echo "<td>".$row['Email']."</td>";
              echo "<td>".$row['mob']."</td>";
             
             
              echo "</tr>";
             }

            }
    

    

    ?>

  
</body>
</html>