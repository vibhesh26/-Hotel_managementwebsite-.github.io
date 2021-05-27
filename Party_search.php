
<HTML>
<head>
	<link rel="stylesheet" href="gcs.css">
</head>
<body bgcolor="#00CC67">
<?php
$PartyId=$_POST["PartyId"];
  
    
   $db_host='localhost';
  $db_user='root';
  $db_pass="";
  $db_name='drm';
  
  $con=mysqli_connect($db_host,$db_user,$db_pass);
  $db=mysqli_select_db($con,$db_name);
  
  
mysqli_select_db($con,"drm");
$result=mysqli_query($con,"select PartyId,PartyName,PartyAddress,PartyCity,PartyState,PinCode,PartyPhoneNo,GstNo,CstNo,FaxNo,PartyRegNo,PartyRank,CreatedByEmpId,createdDate 
from PartyMaster
where PartyId='".$PartyId."';") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Party Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>PartyId</th> 
<th>PartyName</th> 
<th>PartyAddress</th>
<th>PartyCity</th>
<th>PartyState</th>
<th>PinCode</th>
<th>PartyPhoneNo</th>
<th>GstNo</th>
<th>CstNo</th>
<th>FaxNo</th>
<th>PartyRegNo</th>
<th>PartyRank</th>
<th>CreatedByEmpId</th>
<th>createdDate</th>


</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['PartyId']."</th>" ;
   echo"<th>" .$row['PartyName']."</th> "; 
   echo"<th>" .$row['PartyAddress']."</th> ";
   echo"<th>" .$row['PartyCity']."</th> ";
   echo"<th>" .$row['PartyState']."</th> ";
   echo"<th>" .$row['PinCode']."</th> ";
   
   echo"<th>" .$row['PartyPhoneNo']."</th> ";
   echo"<th>" .$row['GstNo']."</th> ";
   echo"<th>" .$row['CstNo']."</th> ";
   echo"<th>" .$row['FaxNo']."</th> ";
   echo"<th>" .$row['PartyRegNo']."</th> ";
   echo"<th>" .$row['PartyRank']."</th> ";
   echo"<th>" .$row['CreatedByEmpId']."</th> ";
   echo"<th>" .$row['createdDate']."</th> ";
   
   
   
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


