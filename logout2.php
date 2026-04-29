<?php

//start session
session_start();

//unset session
session_unset();

//destroy session
session_destroy();

//Redirect to login page
header("Location: login.html");
exit();

?>