<?php
$cookieTime = time() + 3600;
setcookie("user", "权限", $cookieTime);
$code = mt_rand(0, 1000000);
//转入到其他页面 header('location:test.php');
?>
<h3>.php网页的首页</h3>

<div class="welcome-displayBlock">
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <label for="file">文件名：</label>
        <input type="file" name="file" id="file" value="1"><br>
        <input type="submit" name="submit" class="submit" value="提交">
    </form>
</div>
<div class="welcome-displayBlock">
    <form action="" method="post">
        <input type="text" name="contents" class="">
        <input type="submit" value="提交文本内容">
    </form>

    <?php
    $file = fopen("数据.csv", "a+");
    $content = fgetcsv($file);
    echo "<span style='font-size: 14px;color:white;'>csv文件中的第一个元素为：$content[0]</span>";
    if (!empty($_POST["contents"])) {
        $texts = $_POST["contents"] . "\r\n";
        echo "<br><span style='font-size: 14px;color:white;'>你输入的文本内容为：$texts</span>";
        fputs($file, $texts, $length = null);
    } else {
        echo "<br><span style='font-size: 14px;color:white;'>未输入内容</span>";
    };
    unset($_POST["contents"]);

    fclose($file);
    ?>
</div>
<div class="welcome-displayBlock">
    <input type="color">
    <br>
    <input type="date">
    <br>
    <input type="email">
    <br>
    <input type="hidden">
    <br>
    <input type="image">
    <br>
    <input type="month">
    <br>
    <input type="number">
    <br>
    <input type="radio">
    <br>
    <input type="range">
    <br>
    <input type="reset">
    <br>
    <input type="search">
    <br>
    <input type="tel">
    <br>
    <input type="time">
    <br>
    <input type="url">
    <br>
    <input type="week">
</div>
<div class="welcome-displayBlock">
    <label for=></label>
</div>
<div class="welcome-displayBlock">
    <p>一段预定义格式文字</p>
    <PRE style="font-size: 18px;">
更高更高，更高
你从地上最灿烂
像一团火云；
你深深的蓝色，
歌声仍然飞涨，
而且飞得最高。
    </PRE>
</div>
<div class="welcome-displayBlock">
</div>
<div class="welcome-bottomBlock">
    <form action="test.php" method="post">
        <input type="submit" value="测试" class="button">
    </form>
    <button onclick="deleteCookie()" class="button">删除Cookie</button>
    <button onclick="setCookie()" class="button">设置Cookie</button>
</div>
<?php
if (isset($_COOKIE["user"])) {
    echo "<br>" . $_COOKIE["user"];
    echo "<br>关于Cookie";
}
?>