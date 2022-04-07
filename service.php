<?php 
 if($_POST['service-type']){
 	  $service = $_POST['service'];
 	  echo "$service";
 if($service == '0'){
 	  header("Location:tutor.php");
   }
  else if($service == '1'){
 	  header("Location:prep.php");
   }
  else if($service == '2'){
 	  header("Location:underg.php");
   }
 }
 ?>