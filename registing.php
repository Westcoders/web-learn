<?php
include "startSession.php";
include "object.php";
include "method.php";
$nameErr = $passWordErr = $emilErr = $genderErr = $registerSuccess = "";
$theUser = new user;
$medium = 0;
$registerSuccess = "index.html";
$isNew = false;
//用 '随机数+ session' 处理刷新重复提交表单的问题
$code = mt_rand(0, 1000000);
//转入到其他页面 header('location:test.php');
if (!empty($_POST['originator'])) {
    if ($_SESSION["sum"] == $_POST['originator']) {
        //echo "这是刷新";
        unset($_POST["userName"]);
        unset($_POST["passWord"]);
    } else {
        //echo "这是提交";
    }
} else {
    //echo "刚进入表单";
    $_POST['originator'] = -1;
}
$_SESSION["sum"] = $_POST['originator'];
?>
<!DOCTYPE html>
<html>
<?Php
if (!empty($_POST["userName"])) {
    $theUser->userName = $_POST["userName"];
    if (!preg_match("/^[a-zA-Z ]*$/", $theUser->userName)) {
        $nameErr = "名字只能包含字母和空格";
    } else {
        $medium += 1;
    }
}
if (!empty($_POST["passWord"])) {
    $theUser->passWord = $_POST["passWord"];
    $medium += 1;
}
if (!empty($_POST["emil"])) {
    $theUser->emil = $_POST["emil"];
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $theUser->emil)) {
        $emilErr = "邮箱地址不合法";
    } else {
        $medium += 1;
    }
}
if (!empty($_POST["gender"])) {
    $theUser->gender = $_POST["gender"];
    $medium += 1;
}
//读取用户信息文件
$userNameInformation = fopen("数据.csv", "a+");
$file = file("数据.csv");
$userPassWord = fopen("passWord.csv", "a+");
if ($medium == 4) {
    //判定用户的4个信息是否都合法，合法则进行保存用户信息的操作
    fputs($userNameInformation, $_POST["userName"] . "\r\n");
    fputs($userPassWord, $_POST["passWord"] . "\r\n");
    $_SESSION["isRegister"] = true;
    $_SESSION["isLoad"] = true;
    $_SESSION["userName"] = $theUser->userName;
}
//echo "位置" . $theUser->get_seat("WEST\r\n", $file);
fclose($userNameInformation);
fclose($userPassWord);
if (!$_SESSION["isRegister"]) {
?>

    <head>
        <title>用户注册</title>
        <meta charset="utf-8">
        <link href="./defaultCssSettings.css?v=2.0" rel="stylesheet">
        <link type="text/css" href="./specialCss.css?v=2.0" rel="stylesheet" />
    </head>

    <body>
        <h4>用户注册</h4>
        <form action="" method="post" class="formDefaultSettings">
            <span class="error"><?php echo $nameErr ?></span>
            <br>
            <label>用户名：</label>
            <input type="text" name="userName" class="inputBox" value="<?php if (!empty($_POST["userName"])) {
                                                                            echo test_input($_POST["userName"]);
                                                                        }  ?>">
            <br>
            <span class="error"><?php echo $passWordErr ?></span>
            <br>
            <label>密码:</label>
            <input type="text" name="passWord" class="inputBox" value="<?php if (!empty($_POST["passWord"])) {
                                                                            echo test_input($_POST["passWord"]);
                                                                        }  ?>">
            <br>
            <span class="error"><?php echo $emilErr ?></span>
            <br>
            <label>邮&nbsp&nbsp箱：</label>
            <input type="text" name="emil" class="inputBox" value="<?php if (!empty($_POST["emil"])) {
                                                                        echo test_input($_POST["emil"]);
                                                                    }  ?>">
            <br>
            <span class="error"><?php echo $genderErr ?></span>
            <br>
            <label>性&nbsp&nbsp别：</label>
            <input type="radio" name="gender" value="female" class="inputBoxRadio" value="<?php if (!empty($_POST["gender"])) {
                                                                                                echo test_input($_POST["gender"]);
                                                                                            }  ?>">女
            <input type="radio" name="gender" value="male" class="inputBoxRadio"> 男
            <br>
            <input type="submit" value="注册" class="button">
            <!--下面这个input用于配合处理重复提交表单问题 -->
            <input type="hidden" name="originator" value="<?= $code ?>">
        </form>
        <form action="index.html">
            <input type="submit" value="返回" class="button">
        </form>
    </body>

<?php
} else {
    header("location:home.php");
}

?>

</html>