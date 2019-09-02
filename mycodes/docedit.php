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
<br><br><br><br><br> 
    
   <font color="white" face="Berlin Sans FB" size="4">
       
 <div style="background-color:#0008; margin-left:30px; margin-right:670px; padding-left:10px;">
     <br>
    EDIT AVAILABILITY
<form action="docedit.php" method="post">
    <input type="text" placeholder="Enter the doctor name" name="docname">
    <br>
    <input type="checkbox" name="check1" >Available
    <br>
    <input type="checkbox" name="check2">Not Available
    <br>
    <input type="submit" name="submit" value="Submit">
    <br><br>
    
</form>
</div> 
    
    <br><br>
    
<div style="background-color:#0008; margin-left:630px; margin-right:30px;  padding-left:10px;  "> 
       <br>
      SEARCH A DOCTOR
<form action="docedit.php" method="post">
    <input type="search" placeholder="Enter the doctor name or dept" name="name">
    <br>
    <input type="checkbox" name="checkdept" >Search by Department
    <br>
    <input type="checkbox" name="checkname">Search by Name
    <br>
    <input type="submit" name="submit1" value="Search">
    
    <br><br>
</form>
    </div> 
    
    <br><br>
       
<div style="background-color:#0008; margin-left:30px; margin-right:670px; padding-left:10px;  "> 
       <br>
      DELETE A ENTRY
    
<form action="docedit.php" method="post">
    
    <input type="text" placeholder="Enter the doctor name" name="docnm">
    <br>
    <input type="submit" name="submit2" value="Delete">
    
    
</form>
    
    <br>
    <form action="docedit.php" method="post">
        <input type="submit" name="avdoc" value="AVAILABLE DOCTORS">
    </form>  
    <br>
       </div>    

    </font>
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
   //UPDATE CODE
        
if(isset($_POST['submit']))
 {
          $docname=$_POST['docname'];
          $doc="SELECT * FROM doctor WHERE doc='$docname' and username='$username'";
        $res=mysqli_query($conn,$doc);
    
     if($res)
    {
        if(isset($_POST['check2']))
         { $av="Not Available";   }
         
         else if(isset($_POST['check1']))
         { $av="Available";         }
         
         else{ echo "None checked";}
         
       $sql="UPDATE doctor SET available='$av' WHERE doc='$docname'  and username='$username'";
         $result=mysqli_query($conn,$sql);
         
         if($result)
         {
              echo "<script type='text/javascript'>alert('Updated successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
         }
         else
         {
             echo "FAILED";
             
         }
    }
    else
    {
     echo "NO DOCTOR FOUND";   
    }
        
}
    
   //SEARCH CODE
    echo "<br>";
    echo "<font size='4'>";
    
    echo "RESULTS";
    
    echo "</font>";
    echo "<br>";
    if(isset($_POST['submit1']))
    {
        if(isset($_POST['checkdept']))
        {
            $dept=$_POST['name'];
            $search="SELECT * FROM doctor WHERE department='$dept'  and username='$username'";
            $res=mysqli_query($conn,$search);
            if($res)
            {
                while($row = mysqli_fetch_array($res))
                {
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
            
            else{
                echo "NO RESULT";
            }
        
       }
        
        
        if(isset($_POST['checkname']))
        {
            $docnm=$_POST['name'];
            $search="SELECT * FROM doctor WHERE doc='$docnm'  and username='$username'";
            $res=mysqli_query($conn,$search);
            if($res)
            {
                while($row = mysqli_fetch_array($res))
                {
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
            
            else{
                echo "NO RESULT";
            }
        }
    }
    
   if(isset($_POST['submit2']))
   {
       $doctor=$_POST['docnm'];
            $del="DELETE FROM doctor WHERE doc='$doctor'  and username='$username'";
            $res=mysqli_query($conn,$del);
            if($res)
            {
               
                 echo "<script type='text/javascript'>alert('Deleted Successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
                
            }
            
            else{
                echo "NO RESULT";
            }
       
   }
    
    if(isset($_POST['avdoc']))
    {
        $docav="Available";
        $av="SELECT * FROM doctor WHERE available='$docav'  and username='$username'";
        $r=mysqli_query($conn,$av);
         if($r)
            {
                while($row = mysqli_fetch_array($r))
                {
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
            
            else{
                echo "NO RESULT";
            }
    }
    
}
?>
    