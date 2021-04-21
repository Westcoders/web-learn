<?php
include "startSession.php";
$_SESSION['isLoad'] = true;
$_SESSION['userName'] = "管理员";
header("location:home.php");
