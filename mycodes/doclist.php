<html>
<head><title>DOCTOR LIST</title> 
 <meta charset="UTF-8">
    
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta http-equiv="X-AU-compatible" content="ie=edge">
    
                <link rel="stylesheet" type="text/css" href="doctor.css">
        
    
</head>
<body>
<div class="homelink">
        
    <a href="home.php">
    <img src="70370.svg" height="30px" width="30">
    </a>
        
    </div>    
<br><br><br>
    
<font  color='green' face='verdana'size='6'><center> Doctor list</center>  </font> 
         <br>    
</body>

</html>
<?php
session_start();
$dbservername="localhost";
$dbuser="root";    
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if($conn)
{
    $username=$_SESSION['username'];
    $result = mysqli_query($conn,"SELECT * FROM doctor where username='$username'");
    
    


while($row = mysqli_fetch_array($result))
{
    
/*$redate=mysqli_query($conn,"SELECT YEAR(expiry, '%m/%d/%Y') FROM pharmacy");
    echo $redate;
    $nowdate=getdate();
    if($redate<$nowdate['year'])
        $av='not available';
    else if($redate>$nowdate['year'])
        $av='available';*/
  
echo "<font face='rockwell' size='4'> ";
echo "<b>Name-</b>"                  ."   " .$row['doc']. "<br>";
echo "<b>Qualification-</b>"         ."   " . $row['qualification'] . "<br>";
echo  "<b>Registration No.-</b>"     ."   ". $row['registration'] . "<br>";
echo  "<b>Department-</b>"           ."   " . $row['department'] . "<br>";
echo  "<b>Availability-</b>"         ."   " .  $row['available'] . "<br>";
echo "</font>";    
echo   "<hr>";    
}

}
mysqli_close($conn);
?>
