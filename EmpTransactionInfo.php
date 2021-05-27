
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
$result=mysqli_query($con,"select date, empid, deptid, presenttype from emptransaction") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Employee Dept wise present Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Date</th> 
<th>Emp Id Name</th> 
<th>Dept Id</th>
<th>Present Type</th>
<th>CreatedBy</th>
<th>CreatedDate</th>
<th>Last Update</th>
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['date']."</th>" ;
   echo"<th>" .$row['empid']."</th> "; 
   echo"<th>" .$row['deptid']."</th> ";
   echo"<th>" .$row['presenttype']."</th> ";
   
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


