<!DOCTYPE html>
<html>
    <head>
        <title>AVAILABILITY</title>
        <link rel="stylesheet" type="text/css" href="pharmecy.css"/>
    </head> 
    <body> 
    <a href="home.php">
    <img src="70370.svg" height="30px" width="30">
    </a>  
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
  $nowdate=date("Y-m-d");
  $res="SELECT * FROM pharmacy where username='$username'";
  $result=mysqli_query($conn,$res);
  
    
    if($result)
    {   
     echo "<br><br><br><br>";     
    echo "<table border='1' align='center'>
    <tr>
    <th>DRUG NAME</th>
    <th>BATCH NO.</th>
    <th>MANUFACTURE DATE</th>
    <th>EXPIRY DATE</th> 
    <th>PRICE</th>
    </tr>";
while($row = mysqli_fetch_array($result))
        
    {
            
  if($nowdate < $row['expiry'])
  {
      
 echo "<tr>";
        echo "<td>" . $row['drug'] . "</td>";
        echo "<td>" . $row['batch'] . "</td>";
        echo "<td>" . $row['manufacture'] . "</td>";
        echo "<td>" . $row['expiry'] . "</td>";
        echo "<td>" . $row['mrp'] . "</td>";
       // echo "<td>" . $av . "</td>";
        echo "</tr>";
}
}
echo "</table>";

        
        
    
    
    
}
    
        else{
            echo "NO ROW";
        }
    
    
}
?>
