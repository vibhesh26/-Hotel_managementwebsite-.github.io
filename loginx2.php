<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<?php
   $ID=$_POST["ID"];
  $pas=$_POST["pas"];
  
    $query = "select * from login where ID ='".$ID."' and pas = '".$pas."'";

   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='xyz';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  $result =  mysql_query($query);
 $row = mysql_fetch_array($result);
 if($row)
 {
      
 include('pagefound.html');
 }
 else
 {
  include('pagenotfound.html');
 }
   ?>