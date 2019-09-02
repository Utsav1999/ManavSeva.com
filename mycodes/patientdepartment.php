<html>
    <head>
       <!-- <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Coiny|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link href="doctor.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-AU-compatible" content="ie=edge">
       
   
    <title>
 PATIENT DOCTOR SEARCH      
</title>
</head>
    
<body>
   <br><br>     
       

<?php

$dbservername="localhost";
$dbuser="root";    
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if($conn)
{
    if(isset($_POST['patientsrc']))
    {
        $dept=$_POST['searchdept'];
        $av="Available";
        $result = mysqli_query($conn,"SELECT * FROM doctor WHERE department='$dept' and available='$av'");
        
 if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
    $username=$row['username'];
$w="select name from users where username='$username'";
    $hos=mysqli_query($conn,$w);
    if($hos)
    {
     $ro = mysqli_fetch_array($hos);
     $h=$ro['name'];    
    }
echo "<font face='rockwell' size='4'> ";
echo "<b>Id-</b>"                    ."   "  .$row['id']."<br>";
echo "<b>Name-</b>"                  ."   " .$row['doc']. "<br>";
echo "<b>Qualification-</b>"         ."   " . $row['qualification'] . "<br>";
echo  "<b>Registration No.-</b>"     ."   ". $row['registration'] . "<br>";
echo  "<b>Department-</b>"           ."   " . $row['department'] . "<br>";
echo  "<b>Availability-</b>"         ."   " .  $row['available'] . "<br>";
echo  "<b>Hospital-</b>"         ."   " .  $h . "<br>";    
echo "</font>";
   
echo "<a href='dr_app.php'><button>SET APPOINTMENT</button></a>";

   
echo  "<hr>";      
}
     
}
        
else{ echo "NOT AVAILABLE";}    

}
    
else if(isset($_POST['hossearch']))
    {
        $r="select * from users";
        $e=mysqli_query($conn,$r);
        while($row=mysqli_fetch_array($e))
        {
            echo "<font face='rockwell' size='4'> ";
            
            echo "<b>Name-</b>"                  ."   " .$row['name']. "<br>";
            echo "<b>Address-</b>"         ."   " . $row['address'] . "<br>";
            echo  "<b>license No.-</b>"     ."   ". $row['license'] . "<br>";
            echo  "<b>Email-</b>"           ."   " . $row['email'] . "<br>";
            echo  "<b>Phone-</b>"         ."   " .  $row['phone'] . "<br>";
           
            
            echo "</font>";
            echo  "<hr>"; 

        }
        
    }
    
    else if(isset($_POST['hos_search']))
    {
        $hos=$_POST['hos_search'];
         $r="select * from users where name='$hos'";
        $e=mysqli_query($conn,$r);
        while($row=mysqli_fetch_array($e))
        {
            echo "<font face='rockwell' size='4'> ";
            
            echo "<b>Name-</b>"                  ."   " .$row['name']. "<br>";
            echo "<b>Address-</b>"         ."   " . $row['address'] . "<br>";
            echo  "<b>license No.-</b>"     ."   ". $row['license'] . "<br>";
            echo  "<b>Email-</b>"           ."   " . $row['email'] . "<br>";
            echo  "<b>Phone-</b>"         ."   " .  $row['phone'] . "<br>";
           
            
            echo "</font>";
            echo  "<hr>"; 

        }
        
    }
    else{
        echo "Something went wrong";
    }
    
}

?>
    
    </body>
</html>