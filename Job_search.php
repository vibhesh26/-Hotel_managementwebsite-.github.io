
<HTML>
<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<body bgcolor="#00CC67">
<?php
//include("menu_bar.html");
 $jobid=$_POST["jobid"];
  
    
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  
  
mysqli_select_db($con,"drm");
$result=mysqli_query($con,"select jobid, jobname, createdBy, createdDate, lastupdate 
  from jobmast
  where jobid='".$jobid."';") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Jobs Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Job Id</th> 
<th>Job Name</th> 
<th>CreatedBy</th>
<th>CreatedDate</th>
<th>Last Update</th>
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['jobid']."</th>" ;
   echo"<th>" .$row['jobname']."</th> "; 
   echo"<th>" .$row['createdBy']."</th> ";
   echo"<th>" .$row['createdDate']."</th> ";
   echo"<th>" .$row['lastupdate']."</th> ";
  ?>
 <?php
    echo "</tr>";
  }
    echo"</table>"; 
    echo "<br>" ;
 
   mysqli_close($con);
   ?>

</body> 
</html> 