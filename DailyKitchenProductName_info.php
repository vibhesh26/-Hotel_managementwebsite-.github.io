
<HTML>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>

<?php
//include("menu_bar.html");
 $con=mysqli_connect("localhost","root","");
 if (!$con)
   {
      die('Could not connect:'.mysqli_error());
  }
  
  
  
mysqli_select_db($con,"drm");
$result=mysqli_query($con,"select x.TranNo,x.TranDate,x.ProductSlipNo,x.ProductSlipDate,x.KitchenId,y.KitchenName,y.KitchenHead,x.MenuItemId,z.MenuItemName,z.UM,x.ProductQty,x.PrepardeFor 
from DailyKitchenProduct x,kitchenmaster y,hotelmenuitemsmast z
where x.KitchenId=y.KitchenId && x.MenuItemId=z.MenuItemId") ;
echo "
<div class='container-fluid'>
<h3> <center><font color=#000075>Hotel Event Daily Kitchen Product Name Info</font></CENTER></h3>
<table class='table table-striped'>
  <thead>
    <tr>

<th>TranNo</th> 
<th>TranDate</th> 
<th>ProductSlipNo</th>
<th>ProductSlipDate</th>
<th>KitchenId</th>
<th>KitchenName</th>
<th>KitchenHead</th>
<th>MenuItemId</th>
<th>MenuItemName</th>
<th>UM</th>
<th>ProductQty</th>
<th>PrepardeFor</th>



</tr>
</thead>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr>";
   echo"<td>" .$row['TranNo']."</td>" ;
   echo"<td>" .$row['TranDate']."</td> "; 
   echo"<td>" .$row['ProductSlipNo']."</td> ";
   echo"<td>" .$row['ProductSlipDate']."</td> ";
   echo"<td>" .$row['KitchenId']."</td> ";
   echo"<td>" .$row['KitchenName']."</td> ";
   echo"<td>" .$row['KitchenHead']."</td> ";
   echo"<td>" .$row['MenuItemId']."</td> ";
   echo"<td>" .$row['MenuItemName']."</td> ";
   echo"<td>" .$row['UM']."</td> ";
   echo"<td>" .$row['ProductQty']."</td>";
   echo"<td>" .$row['PrepardeFor']."</td> ";
   
   
   
  ?>
 <?php
    echo "</tr>";
  }
    echo"</table>"; 
   
    echo"</div>";
	echo "<br>" ;
   mysqli_close($con);
   ?>

</body> 
</html> 


