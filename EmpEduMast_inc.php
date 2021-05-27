<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $empid=$_POST["empid"];
  $eduid=$_POST["eduid"];
  
  $createdDate=$_POST["createdDate"];
  $createdBy=$_POST["createdBy"];
  $lastUpdate=$_POST["lastUpdate"];
  $remark=$_POST["remark"];
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into empeduinfo() 
    value('".$eduid."','".$empid."','".$createdDate."','".$createdBy."','".$lastUpdate."','".$remark."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>