
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
$result=mysqli_query($con,"select x.empid, x.eduid, y.eduname,x.createdBy, x.createdDate, x.lastUpdate
from empeduinfo x,edumast y
where x.eduid=y.eduid") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Employee Education Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Emp Id</th> 
<th>Edu Id</th> 
<th>Edu Name</th>
<th>CreatedBy</th>
<th>CreatedDate</th>
<th>Last Update</th>
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['empid']."</th>" ;
   echo"<th>" .$row['eduid']."</th> "; 
   echo"<th>" .$row['eduname']."</th>" ;
   echo"<th>" .$row['createdBy']."</th> ";
   echo"<th>" .$row['createdDate']."</th> ";
   echo"<th>" .$row['lastUpdate']."</th> ";
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


