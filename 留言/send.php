<?php
//获取名字
$title = $_GET['title'];
//获取内容
$content = $_GET['content'];
//获取头像
$tx = $_GET['tx'];
//判断值
if ($title == null || $content == null|| $tx == null) {
    die('请输入完整内容！');
}
//获取时间
$date = date("Y-m-d H:i:s");
//聊天保存路径
$file = 'feedback.txt';
//组合方式
$c = '【' . $title . '】《' . $content . '》{' . $tx . '}';
$time = '[' . $date . ']';
//判断是否重复内容
if (substr_count(file_get_contents($file), $c) > 0) {
    die('请勿重复提交！');
}
//追加写入内容
file_put_contents($file, $c . $time, FILE_APPEND);
echo '发送成功！';
?>