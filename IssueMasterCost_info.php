
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
$result=mysqli_query($con,"select x.IssueNo,x.IssueDate,x.RequesionSlipNo,x.IssueKitchenId,x.EventNo,x.RequesionEmpId,x.ItemId,y.ItemName,x.IssueQty,(x.IssueQty*y.ItemRate) Amount,x.CostCenterId,x.CreatedBy,x.CreatedDate 
from IssueMaster x,ItemMaster y
where x.ItemId=y.ItemId") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Issue Master Cost Info</font></CENTER></h3>
<tr class='myThTr'>
<th>IssueNo</th> 
<th>IssueDate</th> 
<th>RequesionSlipNo</th>
<th>IssueKitchenId</th>
<th>EventNo</th>
<th>RequesionEmpId</th>
<th>ItemId</th>
<th>ItemName</th>
<th>IssueQty</th>
<th>Amount</th>
<th>CostCenterId</th>
<th>CreatedBy</th>
<th>CreatedDate</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['IssueNo']."</th>" ;
   echo"<th>" .$row['IssueDate']."</th> "; 
   echo"<th>" .$row['RequesionSlipNo']."</th> ";
   echo"<th>" .$row['IssueKitchenId']."</th> ";
   echo"<th>" .$row['EventNo']."</th> ";
   echo"<th>" .$row['RequesionEmpId']."</th> ";
   
   echo"<th>" .$row['ItemId']."</th> ";
   echo"<td>" .$row['ItemName']."</td> ";
   echo"<th>" .$row['IssueQty']."</th> ";
   echo"<td>" .$row['Amount']."</td> ";
   echo"<th>" .$row['CostCenterId']."</th> ";
   echo"<th>" .$row['CreatedBy']."</th> ";
   echo"<th>" .$row['CreatedDate']."</th> ";
  
   
   
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


