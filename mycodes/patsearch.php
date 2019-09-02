<!Doctype html>
<html>
<head>
    <title>PATIENT ADMISSION PORTAL</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsive-->
     <link rel="stylesheet" type="text/css" href="patient.css"/> 
</head>

<body>
    <div class="homelink">
    <a href="home.php">
    <br><br>    
    <img src="70370.svg" height="30px" width="30">
    </a>    
    </div>
 <br><br>   
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
if(isset($_POST['patsearch']))
{
    
   $patnm=$_POST['patsearch'];
  $pat="SELECT * FROM patient WHERE name='$patnm' and username='$username'";
   $res=mysqli_query($conn,$pat);
    
if($res)
{
        
if(mysqli_num_rows($res)>0)
{
    
    
 echo "<br><br><br><br>";   
    echo "<table border='1' align='center'>
    <tr>
    <th>PATIENT NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    <th>PHONE NO.</th>
    <th>DATE OF ADMISSION</th>
    <th>DATE OF RELEASE</th>
    <th>REASON FOR ADMISSION</th>
    <th>BED NO.</th>
    <th>STATUS</th>
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
echo "</tr>";
}
echo "</table>";

    
    
}
   
else{
        echo "NO RESULT";
    }
    
}
    
}
  
    
else if(isset($_POST['ad']))
{
    $p="Admitted";
    $pat="SELECT * FROM patient WHERE status='$p' and username='$username'";
   $res=mysqli_query($conn,$pat);
    
if($res)
{
        
if(mysqli_num_rows($res)>0)
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
    
}
    
else{
      echo "SUBMIT NOT WORKING";  
    }
    
    
}
    
 ?>
<br><br>    
</div>    
</body>
</html> 