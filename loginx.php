<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
   $ID=$_POST["ID"];
  $pas=$_POST["pas"];
  
   

   $con=mysqli_connect("localhost","root","");
 if (!$con)
   {
      die('Could not connect:'.mysqli_error());
  }
mysqli_select_db($con,"xyz");
$result=mysqli_query($con,"select * from login where ID ='".$ID."' and pas = '".$pas."'") ;
 $row=mysqli_fetch_array($result)
 if($row)
 {
      
  include('pagefound.html');
 }
 else
 {
  include('pagenotfound.html');
 }
   ?>