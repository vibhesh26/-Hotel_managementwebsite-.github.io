
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
$result=mysqli_query($con,"select QuoNo,PartyName,PartyAddress,Rate,Gst,Cst,ransportBy,LandedRate from QuotationTrans") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Transistion Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>QuoNo</th> 
<th>PartyName</th> 
<th>PartyAddress</th>
<th>Rate</th>
<th>Gst</th>
<th>Cst</th>
<th>ransportBy</th>
<th>LandedRate</th>



</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['QuoNo']."</th>" ;
   echo"<th>" .$row['PartyName']."</th> "; 
   echo"<th>" .$row['PartyAddress']."</th> ";
   echo"<th>" .$row['Rate']."</th> ";
   echo"<th>" .$row['Gst']."</th> ";
   echo"<th>" .$row['Cst']."</th> ";
   
   echo"<th>" .$row['ransportBy']."</th> ";
   echo"<th>" .$row['LandedRate']."</th> ";
   
   
   
   
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


