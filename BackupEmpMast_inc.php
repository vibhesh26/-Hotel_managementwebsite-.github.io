<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $EmpId=$_POST["EmpId"];
  $Name=$_POST["Name"];
  $Addr=$_POST["Addr"];
  $city=$_POST["city"];
  $skillId=$_POST["skillId"];
  $jobId=$_POST["jobId"];
  $MobNo=$_POST["MobNo"];
  $WorkExpr=$_POST["WorkExpr"];
  $LastCompany=$_POST["LastCompany"];
  $Gender=$_POST["Gender"];
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into backupempdiary() 
    value('".$EmpId."','".$Name."','".$Addr."','".$city."','".$skillId."','".$jobId."','".$MobNo."','".$WorkExpr."','".$LastCompany."','".$Gender."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>