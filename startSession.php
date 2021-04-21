<?php
if (session_status() !== 2) {
    //会话状态不为2时，表明未启动会话，需要添加启动代码
    session_start();
} else {
    echo "<span style='font-size:12px;'>会话已启动</span>";
};

if (empty($_SESSION["isLoad"])) {
    //isLoad 参数保留
    $_SESSION["isLoad"] = false;
}

if (empty($_SESSION["isRegister"])) {
    //isRegister 参数保留
    $_SESSION["isRegister"] = false;
}
if (empty($_SESSION["userName"])) {
    $_SESSION["userName"] = "";
}
