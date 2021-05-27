
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
$result=mysqli_query($con,"select MenuItemId,MenuItemName,MenuItemType,MenuItemRate,FoodType,UM,NoOfIngrediant,IngrediantTyp,IngrediantCalUm,CostPrice from HotelMenuItemsMast") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Menu Item Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>MenuItemId</th> 
<th>MenuItemName</th> 
<th>MenuItemType</th>
<th>MenuItemRate</th>
<th>FoodType</th>
<th>UM</th>
<th>NoOfIngrediant</th>
<th>IngrediantTyp</th>
<th>IngrediantCalUm</th>
<th>CostPrice</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['MenuItemId']."</th>" ;
   echo"<th>" .$row['MenuItemName']."</th> "; 
   echo"<th>" .$row['MenuItemType']."</th> ";
   echo"<th>" .$row['MenuItemRate']."</th> ";
   echo"<th>" .$row['FoodType']."</th> ";
   echo"<th>" .$row['UM']."</th> ";
   echo"<th>" .$row['NoOfIngrediant']."</th> ";
   
   echo"<th>" .$row['IngrediantTyp']."</th> ";
   echo"<th>" .$row['IngrediantCalUm']."</th> ";
   echo"<th>" .$row['CostPrice']."</th> ";
   
   
   
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


