<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $CostCenterId=$_POST["CostCenterId"];
  $CostCenterName=$_POST["CostCenterName"];
    
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into costcenter(CostCenterId,CostCenterName) 
    value('".$CostCenterId."','".$CostCenterName."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>