<?php
if (session_status() !== 2) {
    session_start();
}
$_SESSION["isRegister"] = false;
$_SESSION['isLoad'] = false;
$_SESSION['userName'] = "";
header('location:index.html');
