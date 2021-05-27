
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
$result=mysqli_query($con,"select deptid, deptname, deptfuncwork, depthead,indusStandManpower, standardManpower,AvailableManpower,standardManpower - AvailableManpower 'RequiredManpower'from deptmast") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Department wise Hotel Manpower Analysis </font></CENTER></h3>
<tr class='myThTr'>
<th>Dept Id</th> 
<th>Dept Name</th> 
<th>Dept Fun Work</th>

<th>Dept Head</th>
<th>Indus Stand Manpow</th>
<th>Stand Manpower</th>

<th>Available Manpow</th>
<th>Required Manpower</th>

</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['deptid']."</th>" ;
   echo"<th>" .$row['deptname']."</th> "; 
   echo"<th>" .$row['deptfuncwork']."</th> ";
   
   echo"<th>" .$row['depthead']."</th> ";
   echo"<th>" .$row['indusStandManpower']."</th> ";
   
   echo"<th>" .$row['standardManpower']."</th> ";
   
   echo"<th>" .$row['AvailableManpower']."</th> ";
   echo"<th>" .$row['RequiredManpower']."</th> ";
   
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


