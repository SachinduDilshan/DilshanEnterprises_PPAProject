<?php
require_once '../connection.php';

	 if(isset($_POST["btnSubmit"]))
			{
       

        $image = "../profilepic/" . basename($_FILES["profilePhoto"]["name"]);
        move_uploaded_file($_FILES["profilePhoto"]["tmp_name"], $image);
        

			  if(!$db)
			   {	
				die("Cannot upload the file, Please choose another file");		
			   }

			   $sql = "INSERT INTO `profile`( `image`)  VALUES ('".$image."');";

	      if(mysqli_query($db,$sql))
          {
          echo "<script>alert(Product Uploaded Successfully)</script>";
          }
       else
            {
              echo "Opps something is wrong, Please select the file again";
            }
              }
    
    ?>