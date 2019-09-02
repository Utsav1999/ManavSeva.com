<?php
$dbservername="localhost";
$dbuser="root";    
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if($conn)
{
    $email="SELECT email FROM details WHERE info='ben 10'";
   $res=mysqli_query($conn,$email);
    if(mysqli_num_rows($res)>0)
    {
        $x=mysqli_fetch_assoc($res);
        
        
        
    }
    
    
}
?>
<html>
<head>    
<title>
    EMAIL SEND 
    
    </title>
</head>
    <body>
        
    <form action="mailto:<?php echo $x['email'];?>" method="post" enctype="text/plain" >
FirstName:<input type="text" name="FirstName">
Email:<input type="text" name="Email">
<input type="submit" name="submit" value="Submit">
</form>

    
    
    
    
    </body>



</html>