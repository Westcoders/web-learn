    <html>

    <head>
        <title>调试部分</title>
        <meta charset="utf-8">
        <link href="./defaultCssSettings.css?v=3.0" rel="stylesheet" type="text/css" />
        <link type="text/css" href="./specialCss.css?v=3.0" rel="stylesheet" />
    </head>

    <body class="defaultSettings">
        <h3>测试部分</h3>
        <?php
        $father = "phpWeb.php";
        include "returnHome.php";
        ?>
        <h4>数据库</h4>
        <?php
        $dbhost = '127.0.0.1';  // mysql服务器主机地址
        $dbuser = 'West';            // mysql用户名
        $dbpass = '123456';          // mysql用户名密码
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        if (!$conn) {
            die('Could not connect: ');
        }
        echo '数据库连接成功！';
        mysqli_close($conn);
        ?>
        <h4>H5-Part</h4>

        <div>
            <canvass></canvass>
        </div>
    </body>


    </html>