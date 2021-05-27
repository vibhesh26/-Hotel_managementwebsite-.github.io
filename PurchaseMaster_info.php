
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
$result=mysqli_query($con,"select PoNo,PoDate,PoType,QuoNo,PartyId,TransportAmt,ItemId,PoQty,ItemUM,Rate,Discount,Gst,Cst,Total,Remark from PurchaseMaster") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Purchase Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>PoNo</th> 
<th>PoDate</th> 
<th>PoType</th>
<th>QuoNo</th>
<th>PartyId</th>
<th>TransportAmt</th>
<th>ItemId</th>
<th>PoQty</th>
<th>ItemUM</th>
<th>Rate</th>
<th>Discount</th>
<th>Gst</th>
<th>Cst</th>
<th>Total</th>
<th>Remark</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['PoNo']."</th>" ;
   echo"<th>" .$row['PoDate']."</th> "; 
   echo"<th>" .$row['PoType']."</th> ";
   echo"<th>" .$row['QuoNo']."</th> ";
   echo"<th>" .$row['PartyId']."</th> ";
   echo"<th>" .$row['TransportAmt']."</th> ";
   
   echo"<th>" .$row['ItemId']."</th> ";
   echo"<th>" .$row['PoQty']."</th> ";
   echo"<th>" .$row['ItemUM']."</th> ";
   echo"<th>" .$row['Rate']."</th> ";
   echo"<th>" .$row['Discount']."</th> ";
   echo"<th>" .$row['Gst']."</th> ";
   echo"<th>" .$row['Cst']."</th> ";
   echo"<th>" .$row['Total']."</th> ";
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


