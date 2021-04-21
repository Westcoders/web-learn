<?Php
include "startSession.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>首页</title>
    <meta charset="utf-8">
    <link href="./defaultCssSettings.css?v=1.0" rel="stylesheet" type="text/css" />
    <link type="text/css" href="./specialCss.css?v=1.0" rel="stylesheet" />
</head>

<body class="defaultSettings">

    <div id="header">
        <div class="link-left">
            <a class="link-left" href="./WebTest.html">网页实例1</a>
            <a class="link-left" href="./phpWeb.php">网页实例2</a>
            <a class="link-left" href="./myTool.php">组件库</a>
        </div>
        <div class="link-right">
            <a class="link-right" href="./userCenter.php">
                <?Php
                echo "<span>" . $_SESSION['userName'] . "</span>";
                ?>
            </a>
            <a class="link-right" href="./loadOut.php">登出</a>

        </div>
        <h1>网页学习首页</h1>

        <div class="registerForm">
            <br>
            <form action="WebTest.html">
                <input type="submit" value="进入html网页" class="button">
            </form>
            <form action="phpWeb.php" class="">
                <input type="submit" value="进入php网页" class="button">
            </form>
        </div>

</body>

</html>