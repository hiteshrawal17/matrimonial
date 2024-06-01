<?php
 include_once("db.php");
   if(empty($_POST["fname"])||empty($_POST["lname"])||empty($_POST["gender"])||empty($_POST["caste"])||empty($_POST["religion"])||empty($_POST["email"])||empty($_POST["pass"])||empty($_POST["occ"])||empty($_POST["dob"])||empty($_POST["country"])||empty($_POST["state"])||empty($_POST["city"])){
     header("Location:register.php?empty=1");
    }
   else{
	  $fname=$_POST["fname"];
	  $lname=$_POST["lname"];
	  $gender=$_POST["gender"];
	  $caste=$_POST["caste"];
	  $religion=$_POST["religion"];
	  $email=$_POST["email"];
	  $pass=$_POST["pass"];
	  $occ=$_POST["occ"];
	  $dob=$_POST["dob"];
	  $country=$_POST["country"];
	  $state=$_POST["state"];
	  $city=$_POST["city"]; 
	  $sn=0;
	  $rs = mysqli_query($conn,"select MAX(sn) from details");
	  if($r=mysqli_fetch_array($rs)){
	       $sn=$r[0];
    }
	  $sn++;
	  $code=" ";
	  $a= array();
	   for($i='A';$i<='Z';$i++){
		array_push($a,$i);
		 if($i=='Z')
	    	break;
	   }
	   for($i='a';$i<='z';$i++){
		array_push($a,$i);
		 if($i=='z')
			break;
	   }
	   for($i='0';$i<='9';$i++){
		array_push($a,$i);
	   }
		shuffle($a);
	    for($i=0;$i<=5;$i++){
		  $code=$code.$a[$i];
		}
	    $code = $code."_".$sn;
		$target = "profile/";
		$target= $target.$code.".jpg";
       if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
	     if(mysqli_query($conn,"insert into details values($sn,'$code','$fname','$lname','$email','$pass','$caste','$gender','$religion','$city','$dob','$state','$country','$occ')")>0){
			 header("Location:register.php?success=1");
		  }
		  
		  else{
			  header("Location:register.php?again=1");
		  }
	   }
		  else{
			  header("Location:register.php?img_err=1");
	   } 
   }
  
?>