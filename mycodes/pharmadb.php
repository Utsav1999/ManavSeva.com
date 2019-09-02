<!DOCTYPE html>
<html>
    <head>
        <title>SEARCH PHARMACY</title>
        <link rel="stylesheet" type="text/css" href="pharmecy.css"/>
        <a href="home.php">
    <img src="70370.svg" height="30px" width="30">
    </a> 
    </head> 
        
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
if(isset($_POST['search']))
{
    $nowdate=date("Y-m-d");
   $drugnm=$_POST['valueToSearch'];
  $drug="SELECT * FROM pharmacy WHERE drug='$drugnm' and username='$username'";
   $res=mysqli_query($conn,$drug);
    
if($res)
{
        
if(mysqli_num_rows($res)>0)
{
 $x=mysqli_fetch_assoc($res);
 echo "<br><br><br><br>";     
 echo "<table border='1' align='center'>
<tr>
<th>DRUG NAME</th>
<th>BATCH NO.</th>
<th>MANUFACTURE DATE</th>
<th>EXPIRY DATE</th>
<th>PRICE</th>
<th>AVALAIBILITY</th>
</tr>";

     if($nowdate<$x['expiry'])
         $av="available";
    else
        $av="not available";
    echo "<tr>";
    echo "<td>" . $x['drug'] . "</td>";
    echo "<td>" . $x['batch'] . "</td>";
    echo "<td>" . $x['manufacture'] . "</td>";    
    echo "<td>" . $x['expiry'] . "</td>";
    echo "<td>" . $x['mrp'] . "</td>";
    echo "<td>" . $av . "</td>";
    echo "</tr>";
                
        echo   " </table> "; 
        

        
        
    }
    else{
        echo 'no row';
    }
    
    
}  
    
}
    
}

?>



