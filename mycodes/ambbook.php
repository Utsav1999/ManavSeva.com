<?php

$dbservername="localhost";
$dbuser="root";    
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if($conn)
{
    if(isset($_POST['ambsrc']))
    {
        $q="select * from amblance where (ambulance-service)>0";
        $sql=mysqli_query($conn,$q);
        
        if(mysqli_num_rows($sql)>0)
            {
            
                while($row = mysqli_fetch_array($sql))
                {
                    $hospital=$row['hospital'];
    
                    $r="select * from users where name='$hospital'";
                    $e=mysqli_query($conn,$r);
                    if($e)
                    {
                        $t=mysqli_fetch_array($e);
                        $address=$t['address'];
                        $phone=$t['phone'];
                        
                    }
  
                    echo "<font face='rockwell' size='4'> ";
                    echo "<b>Id-</b>"                    ."   "  .$row['id']."<br>";
                    echo "<b>Hospital Name-</b>"                  ."   " .$row['hospital']. "<br>";
                    echo "<b>Address-</b>"                  ."   " .$address. "<br>";
                    echo "<b>Phone Number-</b>"                  ."   " .$phone. "<br>";
                    echo "<b>Ambulance Helpline Number-</b>"                  ."   " .$row['phone']. "<br>";
                    echo "</font>";
   
                    echo "<a href='amb_service.html'><button>BOOK</button></a>";

   
                    echo  "<hr>";      
                  }

                
                
                
            }
                
        
    }
    
    
    
    
}
?>