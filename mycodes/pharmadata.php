<html>
    
<head>
<link rel="stylesheet" href="pharmecy.css">   
<title>Pharmacy Data</title>    
    
    
</head>    
<body>
    <a href="home.php">
    <img src="70370.svg" height="30px" width="30" align="top">
    </a> 
    
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
    $result = mysqli_query($conn,"SELECT * FROM pharmacy where username='$username'");
    
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
    
/*$redate=mysqli_query($conn,"SELECT YEAR(expiry, '%m/%d/%Y') FROM pharmacy");
    echo $redate;
    $nowdate=getdate();
    if($redate<$nowdate['year'])
        $av='not available';
    else if($redate>$nowdate['year'])
        $av='available';*/
  
echo "<tr>";
echo "<td>" . $row['drug'] . "</td>";
echo "<td>" . $row['batch'] . "</td>";
echo "<td>" . $row['manufacture'] . "</td>";
echo "<td>" . $row['expiry'] . "</td>";
echo "<td>" . $row['mrp'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
mysqli_close($conn);
?>


    <div id="search" style="margin-left:30px; margin-top:50px; margin-right:670px; background-color:#ABB2B9; padding-left:10px;   " >
        <br><br><br><br>
        
                       <!--Form for Searching-->
   <form action="pharmadb.php" method="post">
            <input type="search" name="valueToSearch" placeholder="Drug Name" >&#x1F50D;
            <input type="submit" name="search" value="Search"><br><br>
   </form>
        
                       <!--Form for Checking Availability-->
    <form action="pharmaav.php" method="post">
            <input type="submit" name="search" value="Check Availability"><br><br>
   </form>
        </div>
    
</body>



</html>

