
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
$result=mysqli_query($con,"select EventManagerId,Name,MobNo,Address,Exp from EventManagerMaster") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Event Manager Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>EventManagerId</th> 
<th>Name</th> 
<th>MobNo</th>
<th>Address</th>
<th>Exp</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['EventManagerId']."</th>" ;
   echo"<th>" .$row['Name']."</th> "; 
   echo"<th>" .$row['MobNo']."</th> ";
   echo"<th>" .$row['Address']."</th> ";
   echo"<th>" .$row['Exp']."</th> ";
   
   
   
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


