<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $eduid=$_POST["eduid"];
  $eduname=$_POST["eduname"];
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
  
  
  $query="insert into edumast() 
    value('".$eduid."','".$eduname."','".$createdDate."','".$createdBy."','".$lastUpdate."','".$remark."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>