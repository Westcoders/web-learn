<?php
include "startSession.php";
if (!$_SESSION["isLoad"]) {
    header("location:loading.php");
}
