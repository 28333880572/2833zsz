<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>4K留言板</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<style>
    body {
        margin: 0;
        background: #eee;
    }

    .background {
        margin: 0 auto;
        max-width: 800px;
        min-width: 320px;
        padding-bottom: 0.1px;
    }

    .top {
        background: #00A600;
        color: #FFFFFF;
        height: 56px;
        width: 100%;
        line-height: 56px;
        font-size: 17px;
        padding-left: 10px;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        position: fixed;
    }

    .list {
        padding-top: 56px;
        padding-bottom: 10px;
    }

    .card {
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        background: #fff;
        margin: 10px;
        padding: 10px;
    }

    .list_title {
        color: #00A600;
        font-size: 15px;

    }

    .list_content {
        font-size: 14px;
        margin: 5px;
        color: #757575;
        word-wrap: break-word;
        word-break: break-all;
    }

    .list_time {
        text-align: right;
        font-size: 13px;
        margin-top: 5px;
    }

    .write {
        width: 50px;
        height: 50px;
        background: #00A600;
        text-align: center;
        line-height: 55px;
        border-radius: 50%;
        color: #fff;
        font-size: 13px;
        box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.3);
        position: fixed;
        bottom: 15px;
        right: 20px;
    }

</style>

<body>
<!--标题栏-->
<div class="top">聊天室zx4k.cn</div>
<div class="background">
    <!--聊天列表-->
    <div class="list">
        <?php
        //聊天路径
        $file = 'feedback.txt';

        //判断是否存在
        if (!is_file($file)) {

            echo '<div align="center">还没有聊天内容呢！</div>';

        } else {
            //读取文件
            $message = file_get_contents($file);

            //转化为数组
            $pieces = explode("【", $message);
            $arrlength = count($pieces);

            for ($x = 1; $x < $arrlength; $x++) {

                $data = $pieces[$x];

                //截取名字
                $title = strstr($data, '】', true);

                //截取内容
                $content = strstr(strstr($data, "《"), "》", true);
                
                //截取头像
                $tx = strstr(strstr($data, "{"), "}", true);

                //截取聊天时间
                $time = strstr(strstr($data, "["), "]", true);

                $tx = str_replace("{", "", $tx);

                $content = str_replace("《", "", $content);

                $time = str_replace("【", "", $time);

                //输出内容
                echo '
            <div class="card">
            <div class="list_title">【'.nl2br(htmlentities($title,ENT_QUOTES,"UTF-8")).'】</div>
            <div class="list_content">《'.nl2br(htmlentities($content,ENT_QUOTES,"UTF-8")).'》</div>
            <div class="list_content">{'.nl2br(htmlentities($tx,ENT_QUOTES,"UTF-8")).'}</div>
            <div class="list_time">'.$time.']</div>
            </div>';

            }
        }
        ?>
    </div>
    

    <!--x悬浮按钮-->
    <a href="write.html">
        <div class="write">
            <div>聊天</div>
        </div>
    </a>


</div>
<!--底部-->
<a href="http://www.zx4k.cn">
    <div align="center" style="color: #00A600;font-size: 13px;margin-bottom: 10px">4K</div>
</a>
</body>

</html>
