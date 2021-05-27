
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
$result=mysqli_query($con,"select x.deptid, y.deptname, x.noofemp,x.createdBy, x.createdDate, x.lastupdate 
from hotelstdmanpower x,deptmast y
where x.deptid=y.deptid") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Dept wise Manpower Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Dept Id</th> 
<th>Dept Name</th>
<th>No Of Emp</th> 
<th>CreatedBy</th>
<th>CreatedDate</th>
<th>Last Update</th>
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['deptid']."</th>" ;
   echo"<th>" .$row['deptname']."</th>" ;
   echo"<th>" .$row['noofemp']."</th> "; 
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


