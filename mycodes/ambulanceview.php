<!Doctype html>
<html>
<head>
    <title>Ambulance View</title>
      <meta charset="UTF-8">
    
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta http-equiv="X-AU-compatible" content="ie=edge">
    
     <link rel="stylesheet" type="text/css" href="ambulance.css">
    
</head>
    
<body>
    
<div class="main" style="padding-bottom:120px; padding-left:30px; padding-top:19px;">
    
    <div class="homelink">
        
    <a href="home.php">
    <img src="70370.svg" height="30px" width="30">
    </a>
    </div>
    
<font  color='green' face='verdana'size='6'><center> Ambulance Available</center>  </font> 
         <br>    
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
        $q="select * from amblance where  username='$username'";
        
        $res=mysqli_query($conn,$q);
        if($res)
        {
            $r=mysqli_fetch_array($res);
            if($r)
            {
                $av=$r['ambulance']-$r['service'];
                echo "<font size='7' face='rockwell'><center>".$av."</center></font>";
                echo"<br>";
                echo "Total Ambulance-";
                echo "<font size='5' face='rockwell'>".$r['ambulance']."</font>";
                echo "<br><br>";
                echo "On Service-";
                echo "<font size='5' face='rockwell'>".$r['service']."</font>";
                echo "<br><br>";
            }
            
            
        }
    
        else{ echo "Error"; }
    
    if(isset($_POST['edit']))
    {
        $new=$_POST['amb'];
        if(isset($_POST['chck1']))
        $sql="UPDATE amblance SET ambulance='$new' WHERE  username='$username'";
        
        else if(isset($_POST['chck2']))
        {   
          $m="select * from amblance where hospital='hospital'";
          $res=mysqli_query($conn,$m);
          if($res)
          {
            $r=mysqli_fetch_array($res);
            if($r)
            {
                $serall=$r['service']-$new;
            }
          } 
        $sql="UPDATE amblance SET service='$serall' WHERE username='$username'"; 
        }
        
        $re=mysqli_query($conn,$sql);
        if($re)
            
        { echo "<script type='text/javascript'>alert('Edited successfully!')
                   window.location.href='http://localhost/mycodes/ambulanceview.php'
                 </script>";
        }
        else{ echo "ERROR";}
        
    }


}




?>
                <!--UPDATE CODE-->
   
<form action="ambulanceview.php" method="post">
<input type="checkbox" name="chck1">EDIT NUMBER OF AMBULANCE<br><br>  
<input type="checkbox" name="chck2">EDIT AMBULANCE RETURNED<br><br> 
ENTER THE NUMBER <br>    
<input type="number" name="amb" placeholder="Number">
<br><br>        
<input type="submit" name="edit" value="EDIT">    
    
</form>   
    
</div>    
</body>
</html>