
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
$result=mysqli_query($con,"select QuoNo,QuoDate,QuoType,ItemId,Um,QuoQty,Make,Remark from QuotationMaster") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Quotation Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>QuoNo</th> 
<th>QuoDate</th> 
<th>QuoType</th>
<th>ItemId</th>
<th>Um</th>
<th>QuoQty</th>
<th>Make</th>
<th>Remark</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['QuoNo']."</th>" ;
   echo"<th>" .$row['QuoDate']."</th> "; 
   echo"<th>" .$row['QuoType']."</th> ";
   echo"<th>" .$row['ItemId']."</th> ";
   echo"<th>" .$row['Um']."</th> ";
   echo"<th>" .$row['QuoQty']."</th> ";
   
   echo"<th>" .$row['Make']."</th> ";
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


