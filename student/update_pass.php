<?php
   include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <style type = "text/css">
       
        body
        {
            height :600px;

        }
        
        .box{
            height :730px;
            /* background-image: url("images/forget.jpg"); */
            margin-left :3%;
            margin-right:3%;
            margin-top : 4%;
            margin-bottom:5%;
            background-color:#9d4d00e8;
                     
        }
        .boxy{
      height: 400px ;
      width: 600px;
      margin: auto;
      background-color: #4f2508;
      
      
      
    }

    .forget{
      padding-top: 7%;
      padding-left:25%;
    }

    </style>

    

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
              <a class="navbar-brand" style="color: cornsilk;" href="index.php">Home</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" style="color: cornsilk;" aria-current="page" href="books_home.php">Books</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: cornsilk;" href="student_login.php">Student Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: cornsilk;" href="registration.php">Registration</a>
                  </li>
                  
                </ul>
                
              </div>
            </div>
          </nav>

        <div class="box">
        <h1 style="text-align:center; padding-top: 2%;color: rgb(228, 227, 222); font-size: 60px;">
        OUR E-LIBRARY</h1>

        <div class="boxy">
        <h1 style="text-align:center; padding-top: 5%; color: white; padding-bottom:2.7%;"> Change Password</h1>
         
        <form action="" method="post">
           <div class="forget">
                        <label style="color: darkgrey;" for="username">Username &nbsp; &nbsp; &nbsp; &nbsp;   </label>
                        <input type="text" name="username" placeholder="" required> <br> <br>
                        <label style="color: darkgrey;" for="email">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;   </label>
                        <input type="text" name="Email" placeholder="" required> <br> <br>
                        <label for="password" style="color: darkgrey;"> New Password   &nbsp; </label>
                        <input type="password" name="password" placeholder="" required> <br> <br>
                        
                        <input type="submit" value="UPDATE" name="submit" style="text-align:center; margin-left:25%"> 
        </div>
        </form>

        </div>

        <?php

        if (isset($_POST['submit']))
        {
           if ( $sql=mysqli_query($db,"UPDATE student SET password='$_POST[password]' where username = '$_POST[username]' AND Email='$_POST[Email]' "))
           {
               ?> 
                <script type = "text/javascript">
                alert ("The password updated Successfully.");
                </script>
                <?php
           }
           

        }

       

        ?>



</body>
 </html>