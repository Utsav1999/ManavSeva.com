
<html>
    <head>
       <!-- <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Coiny|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-AU-compatible" content="ie=edge">
       
   
    <title>
HOME PAGE        
</title>
</head>
    
<body style="background-image: url(bgimage.jpg);">
        
       
<div id="apname" style="background-image:url(bgimage.jpg);">
       
  <img src="logo.gif" width="350px" height="150px" id="logo">
        
</div> 
    
    
    <br>
    <marquee style="margin-top:172px; background-color:white; height:30px; position:fixed; margin-bottom:100px; margin-left:-30px;">
        <font face="Cursive">
        SEARCH DOCTOR  ||    GET HOSPITAL DETAILS ||  GET AMBULANCE
        </font>    
        </marquee>
    
    <div style="margin-top:300px;">
        
      <font color="white">   
    <div style=" background-image:url(smalldiv.jpg); padding-bottom:120px; margin-left:30px; padding-right:50px; padding-left:70px;  float:left;">
      <br>
   <center><b>DOCTOR SEARCH</b>
        <br><br>
       
    <form action="patientdepartment.php" method="post">
    ENTER THE DEPARTMENT <input type="text" name="searchdept"> 
        <br><br>
       <input type="submit" value="SEARCH" name="patientsrc">
    </form>
    </center>
    </div>
        
    <div style=" background-image:url(smalldiv.jpg); margin-right:200px; padding-bottom:70px; padding-right:50px; padding-left:90px; float:right;">
      <br>
   <center><b>AMBULANCE SEARCH</b>
        <br><br>
       <img src="171259.svg" height="70px" width="70px">
    <form action="ambbook.php" method="post">
        
        <br><br>
       <input type="submit" value="SEARCH" name="ambsrc">
    </form>
    </center>
    </div>
          
<div style=" background-image:url(smalldiv.jpg); padding-bottom:20px; margin-left:-400px; padding-right:50px; margin-top:350px; padding-left:70px;  float:left;">
    <br>
    HOSPITAL LIST
    <br><br>
     <form action="patientdepartment.php" method="post"><input type="submit" name="hossearch" value="View">   </form>   
          
          
    </div>
          
<div style=" background-image:url(smalldiv.jpg); padding-bottom:20px; margin-left:-400px; margin-right:-330px; margin-bottom:30px; padding-right:50px; margin-top:350px; padding-left:70px;  float:right;">
    <br>
    SEARCH HOSPITAL
    <br><br>
     <form action="patientdepartment.php" method="post">
         <input type="search" name="hos_search" placeholder="Hospital Name"> 
         
         

    </form>   
          
          
    </div>
          
        </font>
    </div>
    </body></html>