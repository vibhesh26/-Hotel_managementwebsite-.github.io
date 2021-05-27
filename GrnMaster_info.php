
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
$result=mysqli_query($con,"select GrnNo,GrnDate,PoNo,PartyId,ChallanNo,ChallanDate,TransportBy,InvoiceNo,ItemId,ItemQty,RecivedQty,RejectQty,InspectedBy,make,Rate,Total,Gst,GstAmt,Cst,CstAmt,Gtotal from GrnMaster") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Grn Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>GrnNo</th> 
<th>GrnDate</th> 
<th>PoNo</th>
<th>PartyId</th>
<th>ChallanNo</th>
<th>ChallanDate</th>
<th>TransportBy</th>
<th>InvoiceNo</th>
<th>ItemId</th>
<th>ItemQty</th>
<th>RecivedQty</th>
<th>RejectQty</th>
<th>InspectedBy</th>
<th>make</th>
<th>Rate</th>
<th>Total</th>
<th>Gst</th>
<th>GstAmt</th>
<th>Cst</th>
<th>CstAmt</th>
<th>Gtotal</th>


</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['GrnNo']."</th>" ;
   echo"<th>" .$row['GrnDate']."</th> "; 
   echo"<th>" .$row['PoNo']."</th> ";
   echo"<th>" .$row['PartyId']."</th> ";
   echo"<th>" .$row['ChallanNo']."</th> ";
   echo"<th>" .$row['ChallanDate']."</th> ";
   
   echo"<th>" .$row['TransportBy']."</th> ";
   echo"<th>" .$row['InvoiceNo']."</th> ";
   echo"<th>" .$row['ItemId']."</th> ";
   echo"<th>" .$row['ItemQty']."</th> ";
   echo"<th>" .$row['RecivedQty']."</th> ";
   echo"<th>" .$row['RejectQty']."</th> ";
   echo"<th>" .$row['InspectedBy']."</th> ";
   echo"<th>" .$row['make']."</th> ";
   echo"<th>" .$row['Rate']."</th> ";
   echo"<th>" .$row['Total']."</th> ";
   echo"<th>" .$row['Gst']."</th> ";   
   echo"<th>" .$row['GstAmt']."</th> ";
   echo"<th>" .$row['Cst']."</th> ";
   echo"<th>" .$row['CstAmt']."</th> ";
   echo"<th>" .$row['Gtotal']."</th> ";
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


