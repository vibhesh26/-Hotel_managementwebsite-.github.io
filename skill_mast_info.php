
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
$result=mysqli_query($con,"select skillid, skillname, createdDate, createdBy, lastUpdate, remark from skillmast") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Skill Mast Info</font></CENTER></h3>
<tr class='myThTr'>
<th>Skill Id</th> 
<th>Skill Name</th>
<th>CreatedDate</th>
<th>CreatedBy</th>
<th>LastUpdate</th>
<th>Remark</th> 
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['skillid']."</th>" ;
   echo"<th>" .$row['skillname']."</th> "; 
   //echo"<th>" .$row['standard']."</th> ";
   echo"<th>" .$row['createdDate']."</th> ";
   echo"<th>" .$row['createdBy']."</th> ";
   echo"<th>" .$row['lastUpdate']."</th> ";
   echo"<th>" .$row['remark']."</th> ";
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


