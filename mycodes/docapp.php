<!Doctype html>
<html>
<head>
    <title>pharmecy</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsive-->
     <link rel="stylesheet" type="text/css" href="pharmecy.css"/> <!--pharmecy.css file lining with pharmecy.html file-->
</head>

<body>
    <div class="homelink">
    <a href="home.php">
    <br><br>    
    <img src="70370.svg" height="30px" width="30">
    </a>    
    </div>
<div class="pdata-box">
        <h1>Details of Drug</h1>
        <form action="mail.php" method="post">
        <div class="textbox">
            Name
            <input type="text" placeholder="" name="name" value="">
        </div>
        <div class="textbox">
            Age
            <input type="number" placeholder="" name="age" value="">
        </div>
       
        
        <input class="btn" type="submit" name="submit" value="SAVE">
          
               <input class="btn" type="submit" name="submit2" value="SAVE & ADD">
       
            
            </form>
    <a href=' "mailto:"srijitpaulchoudhuri@gmail.com" &subject="+subjectText+"&body="+bodyText '> mail</a>
    </div>
    </body>
</html>
