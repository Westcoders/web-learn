<?php
//需要放在最顶部的脚本位置
include "startSession.php";
include "method.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>用户登录</title>
    <link href="./defaultCssSettings.css?v=1.0" rel="stylesheet" type="text/css" />
    <link type="text/css" href="./specialCss.css?v=2.0" rel="stylesheet" />
    <style>
        .loading-form {}
    </style>
</head>
<?php
//权限检查部分
$file = fopen("数据.csv", "r");
$userName = file("数据.csv");
$passWordArray = file("passWord.csv");
$theName = $nameErr = '';
$passWord = $passWordErr = '';
if (!empty($_POST["userName"])) {
    //获取登录表单提交的用户名
    $theName = $_POST["userName"] . "\r\n";
};
if (!empty($_POST["passWord"])) {
    //获取登录表单提交的用户密码
    $passWord = $_POST["passWord"] . "\r\n";
}
$seat = get_seat($theName, $userName);
if (empty($_POST["userName"])) {
    echo "用户名未填写";
} elseif ($seat == -1) {
    //echo "用户名不正确";
    $nameErr = "用户名不正确";
} elseif ((!empty($_POST["passWord"])) && ($passWord  == $passWordArray[$seat])) {
    $_SESSION["userName"] = $theName;
    $_SESSION["isLoad"] = true;
} else {
    $passWordErr = "密码不正确";
}
/*if (!isset($_SESSION["isLoad"]) || $_SESSION["isLoad"] < 0) {
    $father = "index.html";
    include "checkLoad.php";
    include "returnHome.php";
} elseif ($_SESSION["isLoad"] > 0) {
}*/
fclose($file);
if ($_SESSION["isLoad"]) {
    //这个转跳页面可以设置一个变量，由父页面传入'$toWhere'
    $nameErr = '';
    $passWordErr = '';
    header("location:home.php");
} else {

?>

    <body>
        <h3>用户登录</h3>
        <div class="form">
            <form action="loading.php" method="post" class="loading-form">
                <div class="form-span">用户名：</div>
                <input type="text" name="userName" class="form-input">
                <br>
                <span class="form-span">密 码：</span>
                <input type="text" name="passWord" class="form-input">
                <input type="submit" value="登录" class="form-button">
            </form>
        </div>

    </body>
<?php
}
?>

</html>