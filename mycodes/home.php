<?php session_start(); ?>
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
       
<div id="mySidenav" class="sidenav" style="background-image: url(sidenav.jpg);">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="logo.gif" height="70px" width="150px"> 
    <hr size="2%" noshade="10">
    
    <button class="dropdown-btn"><img src="1021606.svg" height="70px" width="70px" id="docimg">Doctor List<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a href="doctor.html">Save or Add</a>
    <a href="docedit.php">Edit</a>
    <a href="doclist.php">View</a>
  </div>
    
  <button class="dropdown-btn"><img src="171259.svg" height="70px" width="70px">Ambulance<i class="fa fa-caret-down"></i></button>
    
    <div class="dropdown-container">
    <a href="ambulance.html">Create</a>
    <a href="ambulanceview.php">Edit/View</a>
    </div>
    
    <button class="dropdown-btn"><img  src="139168.svg" height="70px" width="70px"> Pharmacy<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a href="pharmecy.html">Save or Add</a>
    <a href="pharmadata.php">View</a>
    
  </div>
    <button class="dropdown-btn"><img src="1513366.svg" height="70px" width="70px" id="docimg">Patient<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a href="patientadd.html">Admission</a>
    <a href="patientview.php">View</a>
    <a href="doclist.php"></a>
  </div>
   <button class="dropdown-btn"><img src="265706.svg" height="70px" width="70px" id="docimg">Appoinments<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a href="hos_app.php">Pending</a>
    <a href="appdetails.php">View</a>
    
  </div>
    
</div>



        
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        
<div id="main">
    
      <!-- Use any element to open the sidenav -->
<span style="font-size:30px;cursor:pointer;margin-top:-200px;background-color:#0000; color:white;" onclick="openNav()">&#9776; <b></b></span>
 
    <div style="float:right; margin-top:-233px; position:fixed; margin-left:1234px;"><a href=logout.php><image src="1432552.svg" height="100px" width="50px"></image></a></div>
    <br><br>
 <div id="hname" style="background-image: url(smalldiv.jpg); padding-left:70px; padding-right:70px; margin-left:-40px; margin-right:-40px;" >
       <font color="white"> 
        <h2>
            <?php echo $_SESSION['name']; ?>
            
        </h2>
     
     <h2>
            <?php echo $_SESSION['address']; ?>
            
        </h2>
        <br>
       </font> 
 </div>
<br><br>        
<!--<div id="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            
        </p>
    
    
        
</div>-->
    
    <div style="margin-left:30px; margin-right:0px; background-image:url(smalldiv.jpg); padding-bottom:40px; padding-left:10px; float:left; width:450px;" >
    <br>
    <center>    
    <font face="verdana" size="4" color="white">Doctor List</font>
        <br><br>
        <a href="doclist.php"><button>CLICK</button></a>
       <br> 
    </center>
    </div>
    
    <div style="margin-right:30px; margin-left:0px; background-image:url(smalldiv.jpg); padding-bottom:49px; padding-left:10px; float:right; width:450px;" >
    <br>    
    <center>    
    <font face="verdana" size="4" color="white">Available Medicine</font>
        <br><br>
        <a href="pharmaav.php"><button>CLICK</button></a>
       <br> 
    </center>
    </div>
    <br><br>
    <div style="margin-left:70px; margin-right:0px; margin-top:64px;  background-image:url(smalldiv.jpg); padding-bottom:30px; padding-left:10px; float:left; width:450px;" >
    <br>
    <center>    
    <font face="verdana" size="4" color="white">Available Doctors </font>
        <br><br>
        <form action="docedit.php" method="post">
        <input type="submit" name="avdoc" value="View">
        
        </form>
        
            <br> 
    </center>
    </div>
    <br><br>
    
    <div style="margin-right:60px; margin-left:0px; margin-top:64px; background-image:url(smalldiv.jpg); padding-bottom:45px; padding-left:10px; float:right; width:450px;" >
    <br>    
    <center>    
    <font face="verdana" size="4" color="white">Ambulance Status</font>
        <br><br>
        <a href="ambulanceview.php"><button>Check</button></a>
       <br> 
    </center>
    </div>

    <div style="margin-right:230px; margin-left:470px; margin-top:64px; margin-bottom:30px; background-image:url(smalldiv.jpg); padding-bottom:45px; padding-left:10px; width:450px; float:left;" >
    <br>    
    <center>    
    <font face="verdana" size="4" color="white">Pending Appointments</font>
        <br><br>
        <a href="hos_app.php"><button>Check</button></a>
       <br> 
    </center>
    </div>
    
</div>
    

        

    

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
    
<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}  
    
    
</script>    
    
    
    </body>
</html>
