<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $deptid=$_POST["deptid"];
  $deptname=$_POST["deptname"];
  $deptfuncwork=$_POST["deptfuncwork"];
  $deptextno=$_POST["deptextno"];
  $depthead=$_POST["depthead"];
  $standardManpower=$_POST["standardManpower"];
  $IndusStandManpower=$_POST["IndusStandManpower"];
  $AvailableManpower=$_POST["AvailableManpower"];
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
  
  
  $query="insert into deptmast() 
    value('".$deptid."','".$deptname."','".$deptfuncwork."','".$deptextno."','".$depthead."','".$standardManpower."','".$IndusStandManpower."','".$AvailableManpower."','".$createdDate."','".$createdBy."','".$lastUpdate."','".$remark."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>