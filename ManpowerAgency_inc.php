<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $AgentId=$_POST["AgentId"];
  $Name=$_POST["Name"];
  $Addr=$_POST["Addr"];
  $City=$_POST["City"];
  
  $MobNo=$_POST["MobNo"];
  $WorkExper=$_POST["WorkExper"];
  $WorkArea=$_POST["WorkArea"];
  $NoOfEmpHold=$_POST["NoOfEmpHold"];
  $LastCompany=$_POST["LastCompany"];
  
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $query="insert into hmanpoweragencies() 
    value('".$AgentId."','".$Name."','".$Addr."','".$City."','".$MobNo."','".$WorkExper."','".$WorkArea."','".$NoOfEmpHold."','".$LastCompany."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>