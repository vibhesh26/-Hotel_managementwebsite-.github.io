
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
$result=mysqli_query($con,"select deptid, deptname, deptfuncwork, deptextno, depthead,indusStandManpower, standardManpower,AvailableManpower, createdBy, createdDate, remark from deptmast") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Dept Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Dept Id</th> 
<th>Dept Name</th> 
<th>Dept Fun Work</th>
<th>Dept ExtNo</th>
<th>Dept Head</th>
<th>Indus Stand Manpow</th>
<th>Stand Manpower</th>

<th>Available Manpow</th>
<th>CreatedBy</th>
<th>CreatedDate</th>
<th>Remark</th>
</tr>";
$i=0;
 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['deptid']."</th>" ;
   echo"<th>" .$row['deptname']."</th> "; 
   echo"<th>" .$row['deptfuncwork']."</th> ";
   echo"<th>" .$row['deptextno']."</th> ";
   echo"<th>" .$row['depthead']."</th> ";
   echo"<th>" .$row['indusStandManpower']."</th> ";
   
   echo"<th>" .$row['standardManpower']."</th> ";
   
   echo"<th>" .$row['AvailableManpower']."</th> ";
   echo"<th>" .$row['createdBy']."</th> ";
   echo"<th>" .$row['createdDate']."</th> ";
   echo"<th>" .$row['remark']."</th> ";
   $i=$i+$row['AvailableManpower'];
  ?>
 <?php
    echo "</tr>";
  }
    echo"</table>"; 
    echo "<br>" ;
 echo "Total Available Manpower :<b>".$i."<b>";
   mysqli_close($con);
   ?>

</body> 
</html> 


