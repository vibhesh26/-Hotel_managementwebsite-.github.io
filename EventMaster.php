
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
$result=mysqli_query($con,"select x.eventno,x.eventdate,x.eventprogid,y.eventname,x.eventmanager,x.eventtypeno,z.eventtypename,x.clientname,x.clientmobno,x.addr,x.noofguest,x.platerate,x.manpowerforservi,x.kitchenid,x.amountadv,x.eventamount 
from eventmaster x,eventprogrammast y,eventtypemast z
where x.eventprogid=y.programid && x.eventtypeno=z.eventtypeno") ;
echo "<center><table class='reportTable' border='1px'> </center>
<h3> <center><font color=red>Hotel Event Master Info</font></CENTER></h3>
<tr class='myThTr'>
<th>EventNo</th> 

<th>EventDate</th> 
<th>EventProgId</th>
<th>Event Name</th>
<th>EventManager</th>
<th>EventTypeno</th>
<th>Event Type Name</th>
<th>ClientName</th>
<th>ClientMobNo</th>
<th>Addr</th>
<th>NooFGuest</th>
<th>PlateRate</th>
<th>ManpowerForServi</th>
<th>kitchenId</th>
<th>AmountAdv</th>
<th>EventAmount</th>
</tr>";

 while($row=mysqli_fetch_array($result))
  {

   echo "<tr class='myTr'>";
   echo"<th>" .$row['eventno']."</th>" ;
   
   echo"<th>" .$row['eventdate']."</th> "; 
   echo"<th>" .$row['eventprogid']."</th> ";
   echo"<th>" .$row['eventname']."</th>" ;
   echo"<th>" .$row['eventmanager']."</th> ";
   echo"<th>" .$row['eventtypeno']."</th> ";
   echo"<th>" .$row['eventtypename']."</th>" ;
   echo"<th>" .$row['clientname']."</th> ";
      echo"<th>" .$row['clientmobno']."</th> ";
      echo"<th>" .$row['addr']."</th> ";
   echo"<th>" .$row['noofguest']."</th> ";
   echo"<th>" .$row['platerate']."</th> ";
   echo"<th>" .$row['manpowerforservi']."</th> ";
   echo"<th>" .$row['kitchenid']."</th> ";
   echo"<th>" .$row['amountadv']."</th> ";
   echo"<th>" .$row['eventamount']."</th> ";
   
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


