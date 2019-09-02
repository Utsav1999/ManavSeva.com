<?php

$dbservername="localhost";
$dbuser="root";    
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if($conn)
{

    
    if(isset($_POST['app']))
    {
        
        $doc=$_POST['docid'];
        
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $phn=$_POST['phn'];
        $email=$_POST['email'];
        $atype=$_POST['atype'];
        $adate=$_POST['adate'];
        
       
      $sql="SELECT * FROM doctor WHERE id='$doc'";
        $s=mysqli_query($conn,$sql);
        if($s)
        {
            $d=mysqli_fetch_array($s);
            $docnm=$d['doc'];
            $username=$d['username'];
            $ap= "1";
            $q="insert into appointment(username,name,gender,age,phone,email,type,date,doctor,appoint)                     values('$username','$name','$gender','$age','$phn','$email','$atype','$adate','$docnm','$ap')";
            $query=mysqli_query($conn,$q);
            if($query)
            {
                $w="select * from users where username='$username'";
                $k=mysqli_query($conn,$w);
                if($k)
                {
                    $g=mysqli_fetch_array($k);
                    $to=$g['email'];
                }
        
        $subject =" APPOINTMENT!!";
        
        $txt="Patient Name- ";
        $txt .= $name ;
        $txt .= " "; 
        $txt .="Doctor Name- ";
        $txt .= $d['doc'] ;
         
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers = 'From: <ManavSeva>' . "\r\n";
        
         if(mail($to,$subject,$txt,$headers))
             echo"<script type='text/javascript'>alert('Submitted successfully!')
                   window.location.href='http://localhost/mycodes/pathome.php'
                 </script>";
        else
            echo "not sent";
          
                
            }
        
        }
        
        
     
}
    else if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $l="SELECT * FROM appointment WHERE id='$id'";
        $k=mysqli_query($conn,$l);
        if($k)
        {
             $m=mysqli_fetch_array($k);
            $n=$m['email'];
            $na=$m['name'];
            $doc=$m['doctor'];
            

            if(isset($_POST['yes']))
                $c="Yes";
            else if(isset($_POST['no']))
                $c="No";
            $w="update appointment set appoint='$c' where id='$id'";
            if(mysqli_query($conn,$w))
            {
                
            
            
        $to=$n;   
        $subject =" APPOINTMENT REPLY!!";
        
        $txt="Patient Name- ";
        $txt .= $na ;
        $txt .= " "; 
        $txt .="Doctor Name- ";
        $txt .= $doc ;
        $txt .="APPOINMENT STATUS- " ;
        $txt .= $c;    
            
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers = 'From: <ManavSeva>' . "\r\n";
        
         if(mail($to,$subject,$txt,$headers))
             echo"<script type='text/javascript'>alert('Submitted successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
        else
            echo "not sent";
                
            }
        }
    }
    else if(isset($_POST['bookamb']))
    {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $phn=$_POST['phn'];
      $email=$_POST['email'];
      $add=$_POST['address'];
     
    $sql="select * from amblance where id='$id'";
        $q=mysqli_query($conn,$sql);
        if(mysqli_num_rows($q)>0)
            {
            
                while($row = mysqli_fetch_array($q))
                {
                    $username=$row['username'];
                    $serve=$row['service']+1;
                    
                }
            }
        $am="select * from users where username='$username'";
        $m=mysqli_query($conn,$am);
        if($m)
        {
         $t=mysqli_fetch_array($m);
            $to=$t['email'];
        }
        
        $subject = "AMBULANCE BOOKING";
        
        $txt="Patient Name- ";
        $txt .= $name ;
        $txt .= "    "; 
        $txt .="Phone No.- ";
        $txt .= $phn ;
        $txt .= "    "; 
        $txt .="Address- " ;
        $txt .= $add;    
            
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers = 'From: <ManavSeva>' . "\r\n";
        
         if(mail($to,$subject,$txt,$headers))
         {
             $l="update amblance set service='$serve' where id='$id' ";
             if(mysqli_query($conn,$l))
              {   
                 $to=$email;
                 $subject="AMBULANCE BOOKING CONFIRMATION";
                 $txt="Your Ambulance is on the way";
                 
                 $headers = "MIME-Version: 1.0" . "\r\n";
                $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers = 'From: <ManavSeva>' . "\r\n";
                 if(mail($to,$subject,$txt,$headers))
               echo"<script type='text/javascript'>alert('Submitted successfully!')
                   window.location.href='http://localhost/mycodes/pathome.php'
                 </script>";
             }
         }
        else
            echo "not sent";
                
        
    }
    
}





?>
