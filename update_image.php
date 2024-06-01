<?php
 include_once("db.php");
   if(isset($_COOKIE["login"])){ 
	  $email=$_COOKIE["login"]; 
	  $code=0;
	  $rs = mysqli_query($conn,"select code from details where email ='$email'");
	  if($r=mysqli_fetch_array($rs)){
	       $code=$r[0];
    }
		$target = "profile/";
		$target= $target.$code.".jpg";
       if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
	     header("Location:edit.php?img_success=1");
		  }
		   else{
			  header("Location:edit.php?img_err=1");
		  }
	   }
		  else{
			  header("Location:login.php"); 
   } 
?>