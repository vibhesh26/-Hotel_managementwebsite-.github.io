
<HTML>
<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<body bgcolor="#00CC67">
<?php
//include("menu_bar.html");
 $empid=$_POST["empid"];
  
    
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
  
  
mysqli_select_db($con,"drm");
$result=mysqli_query($con,"select x.empid, x.deptid, y.deptname, x.fname, x.lname, x.empphno, x.jobid, z.jobname, x.skillid, x.place, x.createdBy, x.createdDate, x.remark, x.rateperday 
from empmast x, deptmast y, jobmast z
where empid='".$empid."' && x.deptid=y.deptid && x.jobid=z.jobid") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Emp Mast</font></CENTER></h3>
<tr class='myThTr'>
<th>Emp Id</th> 
<th>Dept Id</th> 
<th>Dept Name</th>
<th>First Name</th>
<th>last Name</th>
<th>Emp Mobno</th>
<th>JobId</th>
<th>Job Name</th>
<th>SkillId</th>
<th>Place</th>
<th>CreatedBy</th>
<th>CreatedDate</th>
<th>Remark</th>
<th>Rate Per Day</th>
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['empid']."</th>" ;
   echo"<th>" .$row['deptid']."</th>" ;
   echo"<th>" .$row['deptname']."</th>" ;
   echo"<th>" .$row['fname']."</th> "; 
   echo"<th>" .$row['lname']."</th> ";
   echo"<th>" .$row['empphno']."</th> ";
   echo"<th>" .$row['jobid']."</th> ";
   echo"<th>" .$row['jobname']."</th>" ;
   echo"<th>" .$row['skillid']."</th> ";
   echo"<th>" .$row['place']."</th>" ;
   //echo"<th>" .$row['deptid']."</th>" ;
   echo"<th>" .$row['createdBy']."</th> ";
   echo"<th>" .$row['createdDate']."</th> ";
   echo"<th>" .$row['remark']."</th> ";
   echo"<th>" .$row['rateperday']."</th>" ;
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


