<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $reqDate=$_POST["reqDate"];
  $deptId=$_POST["deptId"];
  $reqManPower=$_POST["reqManPower"];
  $CreatedBy=$_POST["CreatedBy"];
  $CreatedDate=$_POST["CreatedDate"];
 
  
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into hotelreqmanpower() 
    value('".$reqDate."','".$deptId."','".$reqManPower."','".$CreatedBy."','".$CreatedDate."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>