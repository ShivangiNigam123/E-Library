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
         padding-left :1050px;
         padding-bottom:20px;

     }

  </style>
  <title>Books</title>
</head>
<body >

    <h3 style="text-align: center; font-size: 55px; padding-bottom: 15px; padding-top: 15px">List Of Books</h3>

    <div class="search">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">

    <form class="d-flex" method ="post">
      <input class="form-control me-2" type="text" placeholder="Search books" aria-label="Search" name="search" required>
      <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
    </form>
  </div>
  </div>
</nav>

<div class="search">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">

    <form class="d-flex" method ="post">
      <input class="form-control me-2" type="text" placeholder="Enter book ID" aria-label="Search" name="bid" required>
      <button class="btn btn-outline-success" type="submit" name="Delete">Delete</button>
    </form>
  </div>
  </div>
</nav>
    <?php
 
         if(isset($_POST['submit']))
         {
            $q= mysqli_query($db, "SELECT * FROM books where Name LIKE '%$_POST[search]%' ");

            if(mysqli_num_rows($q) == 0 )
            {
              echo "Sorry! No book found. Try searching again.";
            }
            else
            {
              echo "<table class= 'table table-striped table-hover' >";
          echo "<tr style = 'background-color: grey;'>";
        echo "<th>"; echo "ID"; echo"</th>";
        echo "<th>"; echo "Book name"; echo"</th>";
        echo "<th>"; echo "Author"; echo"</th>";
        echo "<th>"; echo "Edition"; echo"</th>";
        echo "<th>"; echo "Status"; echo"</th>";
        echo "<th>"; echo "Department"; echo"</th>";
        echo "<th>"; echo "Link"; echo"</th>";
          echo"</tr>";

    while ($row = mysqli_fetch_assoc($q))
       {
        echo "<tr>";
        echo "<td>".$row['bid']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Authors']."</td>";
        echo "<td>".$row['Edition']."</td>";
        echo "<td>".$row['Status']."</td>";
        echo "<td>".$row['Department']."</td>";
        echo "<td><a href='".$row['link']."'><b>Open E-Book</b></a></td>";
       
        echo "</tr>";

       }

       echo"</table>";
    

            }
         }
        
        /* if button is not pressed */ 

         else {
          $result=mysqli_query($db, "SELECT * FROM books");
          echo "<table class= 'table table-striped table-hover' >";
          echo "<tr style = 'background-color: grey;'>";
              echo "<th>"; echo "ID"; echo"</th>";
              echo "<th>"; echo "Book name"; echo"</th>";
              echo "<th>"; echo "Author"; echo"</th>";
              echo "<th>"; echo "Edition"; echo"</th>";
              echo "<th>"; echo "Status"; echo"</th>";
              echo "<th>"; echo "Department"; echo"</th>";
              echo "<th>"; echo "Link"; echo"</th>";
          echo"</tr>";
      
          while ($row = mysqli_fetch_assoc($result))
             {
              echo "<tr>";
              echo "<td>".$row['bid']."</td>";
              echo "<td>".$row['Name']."</td>";
              echo "<td>".$row['Authors']."</td>";
              echo "<td>".$row['Edition']."</td>";
              echo "<td>".$row['Status']."</td>";
              echo "<td>".$row['Department']."</td>";
              echo "<td><a href='".$row['link']."'><b>Open E-Book</b></a></td>";
             
              echo "</tr>";
             }

            }

            if(isset($_POST['Delete']))
            {

              mysqli_query($db, "DELETE from books where bid = '$_POST[bid]' ");
              ?>

              <script type = "text/javascript">
                 alert ("Deleted successfully.");
                 </script>
                 <?php
            }
            

            

            ?>
    

  </body>
</html>