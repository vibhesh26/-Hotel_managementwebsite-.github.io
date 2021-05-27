<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
	
?>
<?php
  $empid=$_POST["empid"];
  $deptid=$_POST["deptid"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $empphno=$_POST["empphno"];
  $jobid=$_POST["jobid"];
  $skillid=$_POST["skillid"];
  $place=$_POST["place"];
  $joindate=$_POST["joindate"];
  $empgender=$_POST["empgender"];
  $empmobno=$_POST["empmobno"];
  $address=$_POST["address"];
  $dob=$_POST["dob"];
  $jobname=$_POST["jobname"];
  $workexp=$_POST["workexp"];
  $lastcompany=$_POST["lastcompany"];
  $rateperday=$_POST["rateperday"];
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
  
  
  $query="insert into empmast() 
    value('".$empid."','".$deptid."','".$fname."','".$lname."','".$empphno."','".$jobid."','".$skillid."','".$place."','".$joindate."','".$empgender."','".$empmobno."','".$address."','".$dob."','".$jobname."','".$workexp."','".$lastcompany."','".$rateperday."','".$createdDate."','".$createdBy."','".$lastUpdate."','".$remark."')";
	
     mysqli_query($con,$query);
	 echo"Inserted";
   ?>