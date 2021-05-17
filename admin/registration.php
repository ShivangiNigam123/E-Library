<?php
  include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin registrationr</title>
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
                <h1 style="color: rgb(228, 227, 222); font-size: 80px; text-align: center;padding-bottom: 2%;" >OUR E-LIBRARY</h1>
                <div class="regis">
                    <h1 style="text-align: center; margin-top: 5%; font: bolder;"><br> WELCOME</h1>
                    <h2 style="text-align: center;"> <br>Register here <br></h2>
                    <form action="" name="signup" method="post">
                     <div class="sign">
                        <label style="color: darkgrey;" for="Fname">First name  </label>
                        <input type="text" name="Fname" placeholder="" required> <br> <br>
                        <label style="color: darkgrey;" for="Lname">Last name  </label>
                        <input type="text" name="Lname" placeholder="" required> <br> <br>
                        <label style="color: darkgrey;" for="Email">Email  </label> &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="email" name="Email" placeholder="" required> <br> <br>
                        <label style="color: darkgrey;" for="username">Username  </label>
                        <input type="text" name="username" placeholder="" required> <br> <br>
                        
                        <label style="color: darkgrey;" for="mob">Mobile no. </label> 
                        <input type="text" name="mob" placeholder="" required> <br> <br>

                        <label for="password" style="color: darkgrey;">Password </label> &nbsp;
                        <input type="password" name="password" placeholder="" required> <br> <br>
                        
                        <input type="submit" value="signup" name="submit">

                    </div>
                    </form>


                </div>
                


          </section>

          <?php
            
            if(isset($_POST['submit']))

            {
                $count=0;
                $sql="SELECT username from admin";
                
                $res=mysqli_query($db,$sql);

                while($row=mysqli_fetch_assoc($res))
                {

                    if($row['username'] == $_POST['username'] )
                    {
                        $count=$count+1;
                    }
                }
              if ($count==0)
               {  
                mysqli_query($db,"INSERT INTO `admin` Value ('$_POST[Fname]', '$_POST[Lname]','$_POST[Email]','$_POST[username]','$_POST[mob]','$_POST[password]');" );
           ?>
             
             <script type ="text/javascript">
               alert("Registration successfull");
            
             </script>

           <?php
               }
               else{
                ?>
             
                <script type ="text/javascript">
                  alert("The username already exists.");
               
                </script>
   
              <?php


               }

            }
          ?>


         

          
</body>
</html>