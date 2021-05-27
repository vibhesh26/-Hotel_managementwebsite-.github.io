
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
$result=mysqli_query($con,"select x.InvoiceNum,x.MenuItemId,y.MenuItemName,y.UM,x.Qty,x.Rate,x.Total,x.CreatedBy 
from invoicetrans x,hotelmenuitemsmast y
where x.MenuItemId=y.MenuItemId") ;
echo "
<div class='container-fluid'>
<h3> <center><font color=#000075>Hotel Invoice Transiction Info</font></CENTER></h3>
<table class='table table-striped'>
  <thead>
    <tr>

<th>InvoiceNum</th> 
<th>MenuItemId</th> 
<th>MenuItemName</th>
<th>UM</th>
<th>Qty</th>
<th>Rate</th>
<th>Total</th>
<th>CreatedBy</th>



</tr>
</thead>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr>";
   echo"<td>" .$row['InvoiceNum']."</td>" ;
   echo"<td>" .$row['MenuItemId']."</td> "; 
   echo"<td>" .$row['MenuItemName']."</td> "; 
   echo"<td>" .$row['UM']."</td> "; 
   echo"<td>" .$row['Rate']."</td> ";
   echo"<td>" .$row['Qty']."</td> ";
   echo"<td>" .$row['Total']."</td> ";
   echo"<td>" .$row['CreatedBy']."</td> ";
   
   
   
   
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


