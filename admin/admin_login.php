<?php
   include "connection.php";
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

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
              <a class="navbar-brand" style="color: cornsilk;" href="index.php">Home</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" style="color: cornsilk;" aria-current="page" href="books_home.php">Books</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: cornsilk;" href="admin_login.php">Admin Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: cornsilk;" href="registration.php">Registration</a>
                  </li>
                 
                </ul>
               
              </div>
            </div>
          </nav>
         

          <section>
              <div class="login_img">
                <br><br>
                <h1 style="color: rgb(228, 227, 222); font-size: 80px; text-align: center; padding-bottom: 2%;" >OUR E-LIBRARY</h1>
                <div class="login">
                    <h1 style="text-align: center; margin-top: 5%; font: bolder;"><br> WELCOME BACK</h1>
                    <h2 style="text-align: center;"> <br>Login Form <br></h2>
                     <form action="" name="login" method="post">
                     <div class="login">
                        <label style="color: darkgrey;" for="username">Username : </label>
                        <input type="text" name="username" placeholder="" required> <br> <br>
                        <label for="password" style="color: darkgrey;">Password : </label>
                        <input type="password" name="password" placeholder="" required> <br> <br>
                        
                        <input type="submit" value="LOGIN" name="submit"> 
                        <p> <a href="update_pass.php">Forgot password?</a></p>
                        <p style="color: rgb(160, 156, 156);">New to website ? <a href="registration.php">Sign Up</a></p>
                     </div>

                    </form>

                    

                </div>


              </div>
              


          </section>

          <?php

          if(isset($_POST['submit']))
          {
            $count=0;
            $result=mysqli_query($db,"SELECT * FROM admin WHERE username = '$_POST[username]' && password= '$_POST[password]' ");

            $count=mysqli_num_rows($result);

            if($count==0)
            {
              ?>
                <script type ="text/javascript">
                  alert("The username and password doesnot match.");
               
                </script>
               <?php

            }
            else
            {
              $_SESSION['login_user'] = $_POST['username'];
              ?>
                <script type ="text/javascript">
                 window.location = "books.php"
                 </script>
                  <?php
            }

          }

          ?>
    
    
 </body>
 </html>