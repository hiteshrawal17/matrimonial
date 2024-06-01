<?php
 $code="profile/";
 $target= $target.$code.".jpg";
 if(move_uploaded_file($_FILES['photp']['tmp_name'],$target)){
  header("location:index.php?success=1");
 }
 else{
   echo"Sorry, there was a problem in uploading your file.";
   header("location:index.php?err=1");
 }
?>