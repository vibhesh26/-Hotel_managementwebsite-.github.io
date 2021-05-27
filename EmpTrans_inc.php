<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $date=$_POST["date"];
  $empid=$_POST["empid"];
  $deptid=$_POST["deptid"];
  $presenttype=$_POST["presenttype"];
  
 
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into emptransaction() 
    value('".$date."','".$empid."','".$deptid."','".$presenttype."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>