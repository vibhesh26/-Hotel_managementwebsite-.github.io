
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
$result=mysqli_query($con,"select empid,name,addr,city,skillid,jobid,mobno,workexpr,lastcompany,gender from backupempdiary") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Backup Hotel Employee Info</font></CENTER></h3>
<tr class='myThTr'>
<th>EmpId</th> 
<th>Name</th> 
<th>Addr</th>
<th>city</th>
<th>SkillId</th>
<th>JobId</th>
<th>MobNo</th>

<th>WorkExpr</th>
<th>Work LastCompany</th>
<th>Gender</th>

</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['empid']."</th>" ;
   echo"<th>" .$row['name']."</th> "; 
   echo"<th>" .$row['addr']."</th> ";
   echo"<th>" .$row['city']."</th> ";
   echo"<th>" .$row['skillid']."</th> ";
   echo"<th>" .$row['jobid']."</th> ";
   
   echo"<th>" .$row['mobno']."</th> ";
   
   echo"<th>" .$row['workexpr']."</th> ";
   echo"<th>" .$row['lastcompany']."</th> ";
   echo"<th>" .$row['gender']."</th> ";
   
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


