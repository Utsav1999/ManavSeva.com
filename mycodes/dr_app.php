<!DOCTYPE html>
<html>
<head>
    <title>Doctor Appointment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsive-->
    <link rel="stylesheet" type="text/css" href="dr_app.css"/> <!--index.css file lining with index.html file-->
</head>
<body>
    <div class="appform">
        <img src="usericon.png" class="iconuser">

        <form action="mail.php" method="post">
            <p>Doctor Id</p>
            <input type="integer" name="docid">
            <p>Name</p>
            <input type="text" name="name" placeholder="Name">
            <p>Gender</p>
            <input type="text" name="gender" placeholder="Gender">
                
            <p>Age</p>
            <input type="integer" name="age" placeholder="Age">
            <p>Phone No.</p>
            <input type="integer" name="phn" placeholder="Ph. No.">
            <p>Email</p>
            <input type="text" name="email" placeholder="Email ID">
            <p>Symptoms</p>
            <input type="text" name="atype" placeholder="Describe Your Issues">
            <p>Appointment Date</p>
            <input type="date" name="adate" placeholder="">
            <input class="btn" type="submit" name="app" value="SUBMIT">
        </form>
    </div>
</body>





</html>