
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
$result=mysqli_query($con,"select InvoiceNo,InvoiceDate,InvoiceType,ClientName,ClientMobNo,Discount,DiscountAmt,Gst,GstAmt,Cst,CstAmt,BilAmt from invoicemast") ;
echo "
<div class='container-fluid'>
<h3> <center><font color=#000075>Hotel Invoice Master Info</font></CENTER></h3>
<table class='table table-striped'>
  <thead>
    <tr>

<th>InvoiceNo</th> 
<th>InvoiceDate</th> 
<th>InvoiceType</th>
<th>ClientName</th>
<th>ClientMobNo</th>
<th>Discount</th>
<th>DiscountAmt</th>
<th>Gst</th>
<th>GstAmt</th>
<th>Cst</th>
<th>CstAmt</th>
<th>BillAmt</th>


</tr>
</thead>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr>";
   echo"<td>" .$row['InvoiceNo']."</td>" ;
   echo"<td>" .$row['InvoiceDate']."</td> "; 
   echo"<td>" .$row['InvoiceType']."</td> ";
   echo"<td>" .$row['ClientName']."</td> ";
   echo"<td>" .$row['ClientMobNo']."</td> ";
   echo"<td>" .$row['Discount']."</td> ";
   echo"<td>" .$row['DiscountAmt']."</td>";
   echo"<td>" .$row['Gst']."</td> ";
   echo"<td>" .$row['GstAmt']."</td>" ;
   echo"<td>" .$row['Cst']."</td>" ;
   echo"<td>" .$row['CstAmt']."</td>" ;
   echo"<td>" .$row['BilAmt']."</td>" ;
   
   
   
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


