<html>

<head>
    <meta charset="utf-8">
    <link type="text/css" href="./defaultCssSettings.css?v=1.0" rel="stylesheet" />
    <link type="text/css" href="./specialCss.css?v=1.0" rel="stylesheet" />
</head>

<body>
    <div>
        <?php
        if ($_FILES["file"]["error"] > 0) {
            echo "错误：" . $_FILES["file"]["error"] . "<br>";
        } else {
            echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
            echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
            echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
        };
        move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
        $father = "phpWeb.php";
        include "returnHome.php";
        ?>
    </div>

</body>

</html>