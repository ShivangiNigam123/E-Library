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
    .box{
      height: 500px ;
      width: 600px;
      margin: auto;
      background-color: #863a04;
      margin-top: 3%;
      padding-top: 3%;
      padding-left: 12.5%;
    }

  </style>
  <title> Add Books</title>
</head>
<body style="background-color:#c2c2c2db;" >

<div class="form-style-6">
			<h1 style="text-align:center; padding-top: 2%; font-size: 60px;"> E-Library Book Input Portal</h1>
            
            <div class= "box">

				<form method="POST" action="" enctype="multipart/form-data" onsubmit="return validate(this)">
					
                <input type="text" id="id" name="bid" placeholder="Book ID*" required/> <br><br>
                    <input type="text" id="name" name="Name" placeholder="Book Name*" required/> <br><br>
					
					<input type="text" id="authors" name="Authors" placeholder="Book Author*" required> <br> <br>
					<input type="text" id="edition" name="Edition" placeholder="Edition*" required/> <br><br>
                    <input type="text" id="status" name="Status" placeholder="Status*" required/> <br><br>
                    <input type="text" id="dep" name="Department" placeholder="Department*" required/> <br><br>
					<div style="padding-bottom: 6px"><label style="color: white; padding-bottom: 2%; text-align: center;" >Select Book* (Only Pdf, Doc & Docx files are allowed )<br></label></div>
					<input type="file" name="file" id="bookfile" required/> <br> <br>
					<div class="button">
					<input type="submit" id="submit" name="submit">
                    </div>
			</form>
		</div>
        </div>

        <?php

        if(isset($_POST['submit']))
        {
           
  
           $file = $_FILES['file']['name'];
            //file upload
            $folder="files/";
           

	        $allowed = array ('application/pdf' , 'application/doc' , 'application/docx');
	        if (in_array($_FILES['file']['type'], $allowed))
	        {
			//Move File
			   if(move_uploaded_file($_FILES['file']['tmp_name'], "files/{$_FILES['file']['name']}"))
			   {
			         
                     $link=$folder.$file;
                     ?>
                     <script type="text/javascript">
                     alert("FILE SUCCESSFULLY UPLOADED.");
                     </script>
                    
			   <?php
	        }
		else{
		echo "Wrong File Type";
			}
        
        

        mysqli_query($db, "INSERT INTO books VALUES ('$_POST[bid]','$_POST[Name]','$_POST[Authors]','$_POST[Edition]','$_POST[Status]','$_POST[Department]', '$link')");

        }
    
	
     }


        ?>




</body>
</html>

<script>
    function validate() {
    var val = document.getElementById('bookfile').value.toLowerCase();
    var regex = new RegExp("(.*?)\.(docx|doc|pdf)$");
        if(!(regex.test(val))) {
            document.getElementById('bookfile').value = '';
            alert('Please select correct file format.');
            return false;   
        }
		return true;
		}
</script>