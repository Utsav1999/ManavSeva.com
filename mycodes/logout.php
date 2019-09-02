<?php

session_destroy();
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['address']);
header ("location: http://localhost/mycodes/index.html");
?>