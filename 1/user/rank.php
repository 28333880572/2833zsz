<?php
/**
 * 分站订单数排行
**/
include("../includes/common.php");
$title='分站订单数排行';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-md-8 center-block" style="float: none;">
<?php

?>
<div class="panel panel-success">
     <div class="panel-heading">分站订单数排行</div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th class="text-center">排名</th><th class="text-center">站点ID</th><th class="text-center">站点名称</th><th class="text-center">订单数</th></tr></thead>
          <tbody>
<?php
$sql = "select a.zid,a.sitename,(select count(b.id) from shua_orders as b where a.zid=b.zid) as count from shua_site as a order by count desc limit 10";
$rs=$DB->query($sql);
$i=1;
while($res = $DB->fetch($rs))
{
echo '<tr><td class="text-center"><span class="badge badge-danger">'.$i.'</span></td><td class="text-center"><b>'.$res['zid'].'</b></td><td class="text-center">'.$res['sitename'].'</td><td class="text-center">'.$res['count'].'</td></tr>';
$i++;
}
?>
          </tbody>
        </table>
      </div>
    </div>
 </div>
</div>