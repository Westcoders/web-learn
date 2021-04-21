<div class="returnButton">
    <div>
        <a href="index.html" class="button">返回首页</a>
    </div>
    <div>
        <a href="<?php echo $father ?>" class="button">返回</a>
    </div>
    <?php
    //实现一个可随时调用的返回上一页功能脚本
    //$father = $_SERVER["PHP_SELF"];
    echo "<span style='font-size: 12px;color:block'>本页表的父表为:$father</span>";
    ?>
</div>