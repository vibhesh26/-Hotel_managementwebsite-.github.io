
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
$result=mysqli_query($con,"select x.QuoNo,x.QuoDate,x.QuoType,x.ItemId,y.ItemName,x.Um,x.QuoQty,x.Make,x.Remark 
from QuotationMaster x,ItemMaster y
where x.ItemId=y.ItemId") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Quotation Master Name Info</font></CENTER></h3>
<tr class='myThTr'>
<th>QuoNo</th> 
<th>QuoDate</th> 
<th>QuoType</th>
<th>ItemId</th>
<th>ItemName</th>
<th>Um</th>
<th>QuoQty</th>
<th>Make</th>
<th>Remark</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['QuoNo']."</th>" ;
   echo"<th>" .$row['QuoDate']."</th> "; 
   echo"<th>" .$row['QuoType']."</th> ";
   echo"<th>" .$row['ItemId']."</th> ";
   echo"<td>" .$row['ItemName']."</td> ";
   echo"<th>" .$row['Um']."</th> ";
   echo"<th>" .$row['QuoQty']."</th> ";
   
   echo"<th>" .$row['Make']."</th> ";
   echo"<th>" .$row['Remark']."</th> ";
   
   
   
   
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


