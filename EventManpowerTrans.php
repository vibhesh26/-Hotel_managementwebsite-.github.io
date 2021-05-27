
<HTML>
<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<body bgcolor="#00CC67">
<?php
//include("menu_bar.html");
 $con=mysqli_connect("localhost","root","");
 if (!$con)
   {
      die('Could not connect:'.mysqli_error());
  }
mysqli_select_db($con,"drm");
$result=mysqli_query($con,"select x.EventNo, y.eventname, x.DeptId, z.deptname, x.NoOfEmp, (q.rateperday * x.NoOfEmp) manpowercosting 
from eventmanpowertran x, eventprogrammast y, deptmast z, empmast q
where x.EventNo=y.ProgramId && x.DeptId=z.deptid && x.DeptId=q.deptid") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Events Manpower Requerment Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Event No</th> 
<th>Event Name</th>
<th>Dept ID</th> 
<th>Dept Name</th>
<th>No Of Emp</th>
<th>Man Power Costing</th>

</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['EventNo']."</th>" ;
   echo"<th>" .$row['eventname']."</th>" ;
   echo"<th>" .$row['DeptId']."</th> "; 
   echo"<th>" .$row['deptname']."</th>" ;
   echo"<th>" .$row['NoOfEmp']."</th> ";
   echo"<th>" .$row['manpowercosting']."</th>" ;
  
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


