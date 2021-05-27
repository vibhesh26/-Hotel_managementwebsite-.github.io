
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
$result=mysqli_query($con,"select CostCenterId,CostCenterName from CostCenter") ;
echo "
<div class='container-fluid'>
<h3> <center><font color=#000075>Hotel Cost Center Master Info</font></CENTER></h3>
<table class='table table-striped'>
  <thead>
    <tr>

<th>CostCenterId</th> 
<th>CostCenterName</th> 



</tr>
</thead>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr>";
   echo"<td>" .$row['CostCenterId']."</td>" ;
   echo"<td>" .$row['CostCenterName']."</td> "; 
   
   
   
   
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


