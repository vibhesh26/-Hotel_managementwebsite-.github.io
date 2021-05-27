
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
$result=mysqli_query($con,"select x.MenuItemsId,y.MenuItemName,x.IngredientName,x.Um,x.Qty,x.Rate,x.total 
from MenuIngrediant x,HotelMenuItemsmast y
where x.MenuItemsId=y.MenuItemId") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Menu Ingrediant Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>MenuItemsId</th> 
<th>MenuItemName</th>
<th>IngredientName</th> 
<th>Um</th>
<th>Qty</th>
<th>Rate</th>
<th>total</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['MenuItemsId']."</th>" ;
   echo"<th>" .$row['MenuItemName']."</th> ";
   echo"<th>" .$row['IngredientName']."</th> "; 
   echo"<th>" .$row['Um']."</th> ";
   echo"<th>" .$row['Qty']."</th> ";
   echo"<th>" .$row['Rate']."</th> ";
   echo"<th>" .$row['total']."</th> ";
   
   
   
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


