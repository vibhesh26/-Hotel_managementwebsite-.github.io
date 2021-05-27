
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
$result=mysqli_query($con,"select KitchenId,KitchenName,KitchenLocation,KitchenPhoneNo,KitchenHead from KitchenMaster") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Kitchen Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>KitchenId</th> 
<th>KitchenName</th> 
<th>KitchenLocation</th>
<th>KitchenPhoneNo</th>
<th>KitchenHead</th>


</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['KitchenId']."</th>" ;
   echo"<th>" .$row['KitchenName']."</th> "; 
   echo"<th>" .$row['KitchenLocation']."</th> ";
   echo"<th>" .$row['KitchenPhoneNo']."</th> ";
   echo"<th>" .$row['KitchenHead']."</th> ";
   
   
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


