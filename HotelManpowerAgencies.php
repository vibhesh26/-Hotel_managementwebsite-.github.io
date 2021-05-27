
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
$result=mysqli_query($con,"select agentid,name,addr,city,mobno,workexper,workarea,noofemphold,lastcompany from hmanpoweragencies") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Manpower Agencies Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Agent Id</th> 
<th>Name</th> 
<th>Addr</th>
<th>City</th>
<th>Mobno</th>
<th>Work Exper</th>
<th>Work Area</th>
<th>NoOfEmpHold</th>

<th>Work Last Company</th>

</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['agentid']."</th>" ;
   echo"<th>" .$row['name']."</th> "; 
   echo"<th>" .$row['addr']."</th> ";
   echo"<th>" .$row['city']."</th> ";
   echo"<th>" .$row['mobno']."</th> ";
   echo"<th>" .$row['workexper']."</th> ";
   echo"<th>" .$row['workarea']."</th> ";
   
   echo"<th>" .$row['noofemphold']."</th> ";
   
   echo"<th>" .$row['lastcompany']."</th> ";
   
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


