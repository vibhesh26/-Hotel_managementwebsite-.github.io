
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
$result=mysqli_query($con,"select ItemId,ItemName,UM,ItemMake,OpeningStock,ItemRate,ItemType,ItemInventory,ItemPhyInvDate,ItemPhyInvQty,creadedBy,creadedDate from ItemMaster") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Item Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>ItemId</th> 
<th>ItemName</th> 
<th>UM</th>
<th>ItemMake</th>
<th>OpeningStock</th>
<th>ItemRate</th>
<th>ItemType</th>
<th>ItemInventory</th>
<th>ItemPhyInvDate</th>
<th>ItemPhyInvQty</th>
<th>creadedBy</th>
<th>creadedDate</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['ItemId']."</th>" ;
   echo"<th>" .$row['ItemName']."</th> "; 
   echo"<th>" .$row['UM']."</th> ";
   echo"<th>" .$row['ItemMake']."</th> ";
   echo"<th>" .$row['OpeningStock']."</th> ";
   echo"<th>" .$row['ItemRate']."</th> ";
   
   echo"<th>" .$row['ItemType']."</th> ";
   echo"<th>" .$row['ItemInventory']."</th> ";
   echo"<th>" .$row['ItemPhyInvDate']."</th> ";
   echo"<th>" .$row['ItemPhyInvQty']."</th> ";
   echo"<th>" .$row['creadedBy']."</th> ";
   echo"<th>" .$row['creadedDate']."</th> ";
   
   
   
   
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


