<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

    <div class="wrapper">
        
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(82, 36, 3);">
            <div class="container-fluid">
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <a class="nav-link disabled" style="color: cornsilk;" aria-disabled="true" href="#">E LIBRARY MANAGEMENT SYSTEM &nbsp; &nbsp; </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <a class="navbar-brand" style="color: cornsilk;" href="index2.php">HOME</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" style="color: cornsilk;" aria-current="page" href="books.php">BOOKS</a>
                  </li>
                  
                 
                  </ul>
                
              <div style= "color: cornsilk;">
                <?php

                  echo "Welcome ".$_SESSION['login_user'];

                  ?>
              </div>
                  
                <li class="nav-item">
                    <a class="nav-link" style="color: cornsilk;  float: right;" aria-current="page" href="index.php">Logout</a>

                  </li>
                  
              </div>
            </div>
          </nav>
         

          </body>
</html>