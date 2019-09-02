<?php
session_start();
$dbservername="localhost";
$dbuser="root";    
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if($conn)
{
    if(isset($_POST['submit']))
    {
        $info=$_POST['info'];
        $sql="insert into details(info) values('$info')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo "Succesfully done";
        }
        else{
            echo "failed";
        }
        
    }
 if(isset($_POST['submit1']))
    {
        $drug=$_POST['drugname'];
        $batch=$_POST['batch'];
        $mdate=$_POST['mdate'];
        $edate=$_POST['edate'];
        $price=$_POST['price'];
        $username=$_SESSION['username'];
        $sql="insert into pharmacy(username,drug,batch,manufacture,expiry,mrp) values('$username','$drug','$batch','$mdate','$edate','$price')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo "<script type='text/javascript'>alert('submitted successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
            
        }
        else{
            echo "failed";
        }
        
    }
    if(isset($_POST['submit2']))
    {
        $drug=$_POST['drugname'];
        $batch=$_POST['batch'];
        $mdate=$_POST['mdate'];
        $edate=$_POST['edate'];
        $price=$_POST['price'];
        $username=$_SESSION['username'];
       $sql="insert into pharmacy(username,drug,batch,manufacture,expiry,mrp) values('$username','$drug','$batch','$mdate','$edate','$price')";
         $res=mysqli_query($conn,$sql);
        if($res)
        {
             echo "<script type='text/javascript'>alert('submitted successfully!Add another')
                   window.location.href='http://localhost/mycodes/pharmecy.html'
                 </script>";
        }
        else{
            echo "failed";
        }
        
    }
    if(isset($_POST['submit3']))
    {
        $doc=$_POST['docname'];
        $quali=$_POST['qualify'];
        $reg=$_POST['reg'];
        $dept=$_POST['dept'];
        $username=$_SESSION['username'];
        $av="Available";
        $sql="insert into doctor(username,doc,qualification,registration,department,available) values('$username','$doc','$quali','$reg','$dept','$av')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
             echo "<script type='text/javascript'>alert('submitted successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
        }
        else{
            echo "failed";
        }
        
    }
    
       if(isset($_POST['submit4']))
    {
        $doc=$_POST['docname'];
        $quali=$_POST['qualify'];
        $reg=$_POST['reg'];
        $dept=$_POST['dept'];
        $username=$_SESSION['username'];
        $av="available";   
       $sql="insert into doctor(username,doc,qualification,registration,department,available) values('$username','$doc','$quali','$reg','$dept','$av')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
             echo "<script type='text/javascript'>alert('submitted successfully!Add another')
                   window.location.href='http://localhost/mycodes/doctor.html'
                 </script>";
        }
        else{
            echo "failed";
        }
        
    }
    
     if(isset($_POST['submitamb']))
    {
         
         
        $amb=$_POST['ambulance'];
         $username=$_SESSION['username'];
         $r="select * from users where username='$username'";
         $result=mysqli_query($conn,$r);
         if($result)
         {
             while($row = mysqli_fetch_array($result))
             {
                 $h=$row['name'];
                
             }
             echo $h;
         }
        
        $sql="select * from amblance where hospital='$h'";
        $q=mysqli_query($conn,$sql) ;
        if($q)
        {
            if(mysqli_num_rows($q)>0)
                echo "<script type='text/javascript'>alert('DATA ALREADY AVAILABLE!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
            
        
        else{ 
        $sql="insert into amblance(username,hospital,ambulance) values('$username','$h','$amb')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
             echo "<script type='text/javascript'>alert('submitted successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
        }
        else{
            echo "failed";
        }
            
        }
            
        }
         
        
    }
    
    if( (isset($_POST['submitpat'])) or (isset($_POST['addpat'])) )
    {
        $patnm=$_POST['pname'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $phone=$_POST['phn'];
        $reason=$_POST['reason'];
        $username=$_SESSION['username'];
        $bed=$_POST['bed'];
        $adate=date("Y-m-d");
        $rdate="0000-00-00";
        $status="Admitted";
        $bed2="select bed from patient where bed='$bed' and status='$status and username='$username'";
        $que=mysqli_query($conn,$bed2);
        if(mysqli_num_rows($que)>0)
        {
            echo "<script type='text/javascript'>alert('BED ALREADY OCCUPIED!')
                   </script>";
            
        }
        else
        {
        $sql="insert into patient(username,name,age,gender,phone,admission,released,reason,bed,status)                     values('$username','$patnm','$age','$gender','$phone','$adate','$rdate','$reason','$bed','$status')";
        $res=mysqli_query($conn,$sql);
        if($res)
        { 
            if( (isset($_POST['submitpat'])) )
            {    
             echo "<script type='text/javascript'>alert('submitted successfully!')
                   window.location.href='http://localhost/mycodes/home.php'
                 </script>";
            }
            else if((isset($_POST['addpat'])))
            {
               
             echo "<script type='text/javascript'>alert('submitted successfully!Add Another')
                   window.location.href='http://localhost/mycodes/patientadd.html'
                 </script>";
             
                
            }
            
        }
        else{
            echo "failed";
        }
            
            
        }
    }
    
    if(isset($_POST['submitedit']))
    {
        $patnm=$_POST['patname'];
        $username=$_SESSION['username'];
        if(isset($_POST['check1']))
        {
            $status="Transfered";
            $transfer=$_POST['hname'];
            $rdate=$_POST['rdate'];
             $sql="UPDATE patient SET status='$status',transfer='$transfer',released='$rdate' WHERE name='$patnm' and username='$username'";
            
        }
        
        else if(isset($_POST['check2']))
        {
            
            $status="Released";
            $rdate=$_POST['rdate'];
             $sql="UPDATE patient SET status='$status',released='$rdate' WHERE name='$patnm' and username='$username'";
            
        }
        
        $e=mysqli_query($conn,$sql);
        if($e)
        {
            echo "<script type='text/javascript'>alert('Editted successfully!')
                   window.location.href='http://localhost/mycodes/patientview.php'
                 </script>";
             
        }
    }
    
}
else{
    echo "Connection not made";
}
?>