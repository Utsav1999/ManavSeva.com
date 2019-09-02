<html>
    <head>
       <!-- <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Coiny|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-AU-compatible" content="ie=edge">
    </head>  
<title>
PENDING APPROVALS       
</title>
<body style="background-image:url(appointmentback.jpg); background-repeat:no-repeat; min-width:100%; width: 100%; height: 100%; min-height:100%; background-attachment: fixed;">  
    

    
<div style="background-color:#D7DBDD; padding-left:-40px;">  
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
    echo "<font face='verdana'>";
    $f=1;
  $sql="SELECT * FROM appointment WHERE appoint='$f' and username='$username'";  
    $s=mysqli_query($conn,$sql);
    if($s)
    {
    echo "<br><br><br><br>";   
    echo "<table border='1' align='center'>
    <tr>
    <th>PATIENT ID</th>
    <th>PATIENT NAME</th>
    <th>GENDER</th>
    <th>AGE</th>
    <th>PHONE NO.</th>
    <th>EMAIL</th>
    <th>SYMPTOMS</th>
    <th>DATE OF APPOINTMENT</th>
    <th>DOCTOR NAME</th>
    <th>SELECT</th>
    
    </tr>";

while($row = mysqli_fetch_array($s))
{
  
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";    
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['date'] . "</td>";    
echo "<td>" . $row['doctor'] . "</td>";   
echo "<td>" . "<form action='mail.php' method='post'>
<input type='integer' name='id'>ID<br>
<input type='checkbox' name='yes'>Yes<br>
<input type='checkbox' name='no'>No<br>
<input type='submit' name='submit'>
</form>" . "</td>";
   
echo "</tr>";
}
echo "</table>";
echo "</font>";        
}
    
    
}
?>
    <br><br>
    </div>
   
  </body>  
</html>    