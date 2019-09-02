<!DOCTYPE html>
<html>
    <head>
        <title>PATIENT VIEW</title>
        <link rel="stylesheet" type="text/css" href="patient.css">
        <a href="home.php">
    <img src="70370.svg" height="30px" width="30">
    </a> 
    </head> 
<body>
<div style="background-color:#5DADE2;">       
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
    
     $q="select * from patient where username='$username'";
     $res=mysqli_query($conn,$q);
if($res)
{
    echo "<br><br><br><br>";   
    echo "<table border='1' align='center'>
    <tr>
    <th>PATIENT NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>PHONE NO.</th>
    <th>DATE OF ADMISSION</th>
    <th>DATE OF RELEASE/TRANSFER</th>
    <th>REASON FOR ADMISSION</th>
    <th>BED NO.</th>
    <th>STATUS</th>
    <th>TRANSFERED HOSPITAL</th>
    </tr>";

while($row = mysqli_fetch_array($res))
{
  
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['admission'] . "</td>";
echo "<td>" . $row['released'] . "</td>";
echo "<td>" . $row['reason'] . "</td>";    
echo "<td>" . $row['bed'] . "</td>";   
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . $row['transfer'] . "</td>";    
echo "</tr>";
}
echo "</table>";
}
    
}
?>
    <br><br>
    </div>    

    <br><br><br><br>
    
    <div style="margin-left:30px; margin-right:670px; background-color:#447BCB; padding-left:10px; "> 
      <br>  
    <form action="patsearch.php" method="post">     
    SEARCH PATIENT BY NAME:    
    <input type="search" name="patsearch" >&#x1F50D;
    </form> 
      <br><br>
        
    </div>
    
    <br><br><br><br>
    <div style="margin-left:30px; margin-right:670px; background-color:#447BCB; padding-left:10px;">
    <br><br>    
    EDIT PATIENT DETAILS:
    
     <form action="Untitled-3.php" method="post"> 
       EDIT STATUS
    <input type="text" name="patname" placeholder="Patient name">
    <input type="checkbox" name="check1">TRANSFERRED
    <input type="checkbox" name="check2">RELEASED  
    <br>
    <br>     
    TRANSFER/RELEASE DATE:
    <input type="date" name="rdate"> 
    <br>     
    TRANSFERED HOSPITAL:
    <input type="text" name="hname" placeholder="Hospital Name">  
    <br>     
    <input type="submit" name="submitedit" value="EDIT">      
    </form> 
    <br><br>    
    </div>    
    <br><br>
    <form action="patsearch.php" method="post">
    <input type="submit" value="View Admitted patients" name="ad">
    </form>
    
</body>
</html>
    
