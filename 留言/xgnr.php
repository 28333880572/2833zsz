<?php

//管理员密码
$glymm = '123456789';

//获取修改的聊天记录
$txt = $_GET['txt'];
//获取管理员密码
$mm = $_GET['mm'];
//判断值
if ($mm == $glymm) {
//判断值
if ($txt == null) {
    die('修改失败！');
}
//聊天保存路径
$file = 'feedback.txt';
file_put_contents($file, $txt);
   die('修改成功！');
}
   die('管理员密码错误！');
?>
