<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $deptid=$_POST["deptid"];
  $noofemp=$_POST["noofemp"];
  $lastUpdate=$_POST["lastUpdate"];
  $createdBy=$_POST["createdBy"];
  $createdDate=$_POST["createdDate"];
  $remark=$_POST["remark"];
 
  
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into hotelstdmanpower() 
    value('".$deptid."','".$noofemp."','".$lastUpdate."','".$createdBy."','".$createdDate."','".$remark."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>