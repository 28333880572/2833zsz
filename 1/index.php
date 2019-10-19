<?php
include("./includes/common.php");
include("./includes/txprotect.php");
$qq=isset($_GET['qq'])?strip_tags($_GET['qq']):null;

$addsalt=md5(mt_rand(0,999).time());
$_SESSION['addsalt']=$addsalt;

$rs=$DB->query("SELECT * FROM shua_class WHERE active=1 order by sort asc");
$select='<option value="0">请选择分类</option>';
$shua_class[0]='默认分类';
while($res = $DB->fetch($rs)){
	$shua_class[$res['cid']]=$res['name'];
	$select.='<option value="'.$res['cid'].'">'.$res['name'].'</option>';
}

$select2='<option value="0">请选择商品</option>';

if($is_fenzhan==true && file_exists(ROOT.'assets/img/logo_'.$conf['zid'].'.png')){
	$logo = 'assets/img/logo_'.$conf['zid'].'.png';
}else{
	$logo = 'assets/img/logo.png';
}
@header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
<script>
<!--
document.write(unescape("%3Cscript%3E%0A%3C%21--%0Adocument.write%28unescape%28%22%253Cscript%253E%250A%253C%2521--%250Adocument.write%2528unescape%2528%2522%25253Cscript%25253E%25250A%25253C%252521--%25250Adocument.write%252528unescape%252528%252522%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252527css/26707bedc25a4344bb99d7e1215825f4.css%25252527%25252520rel%2525253D%25252527stylesheet%25252527%25252520type%2525253D%25252527text/css%25252527%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522css/bootstrap.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522css/nifty.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522css/nifty-demo-icons.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522css/nifty-demo.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522css/magic-check.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Clink%25252520href%2525253D%25252522css/pace.min.css%25252522%25252520rel%2525253D%25252522stylesheet%25252522%2525253E%252522%252529%252529%25253B%25250A//--%25253E%25250A%25253C/script%25253E%2522%2529%2529%253B%250A//--%253E%250A%253C/script%253E%22%29%29%3B%0A//--%3E%0A%3C/script%3E"));
//-->
</script>
<style>
img.logo{width:14px;height:14px;margin:0 5px 0 3px;}
body{
background:#ecedf0 url("assets/img/bj.png") fixed;
background-repeat:repeat;}
</style>
</head>
<body>
<div class="modal fade" align="left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $conf['sitename']?></h4>
      </div>
      <div class="modal-body">
	  <?php echo $conf['modal']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">知道了</button>
      </div>
    </div>
  </div>
</div>
<br/>
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
<div class="panel panel-default">
	<div class="panel-body" style="text-align: center;">
		<img src="<?php echo $logo?>">
	</div>
</div>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title"><font color="#fff"><i class="fa fa-volume-up"></i>&nbsp;&nbsp;<b>站点公告</b></font></h3></div>


<center>


<div>
<center>

<div class="list-group-item reed"><span class=""></span> 
 <font color="#000000"> 


<span class="label label-default">支持：</span>


<span class="label label-info">QQ钻</span></a>  <span class="label label-primary">名片赞</span> </a> <span class="label label-danger">空间</span></a> <span class="label label-warning">全民K歌</span></a> <span class="label label-success">快手</span></a> 
<span class="label label-danger">说说队形</span></a>  <span class="label label-primary">新浪微博</span> </a>
  </p>

<div> 
<p class="alert alert-success" style="padding: 10px; font-size: 90%;">
1.下单前请阅读商品 说明后再购买！
  </p>
<p class="alert alert-danger" style="padding: 10px; font-size: 90%;">
2.名片赞 K歌等优先 其他24小时内！QQ钻类业务不是秒刷但会在1天内处理,勿催！
  </p>
<p class="alert alert-info" style="padding: 10px; font-size: 90%;">
3.下单1分钟内提交 尽情的来 Hi 吧！
  </p>
</div> 
<div>
</a><a target="_blank" class="btn btn-danger" href="user/reg.php"></i>在线搭建分站</a>
<a target="_blank" class="btn btn-info" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq']?$conf['qq']:$conf['kfqq']?>&site=qq&menu=yes"><i class="fa fa-qq"></i>联系客服</a>
<div/>
<?php echo $conf['anounce']?>
</div>
<div class="tab-content">
<div id="demo-tabs-box-1" class="tab-pane fade active in">
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title"><font color="#fff"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;<b>自助下单</b></font><span class="pull-right"><a data-toggle="tab" href="#demo-tabs-box-2" aria-expanded="false" class="btn btn-warning btn-rounded"><i class="fa fa-warning"></i> 注意</a></small></h3></div>
	<ul id="nav-tabs" class="nav nav-tabs">
		<li class="active"><a href="#onlinebuy" data-toggle="tab"><i class="fa fa-shopping-cart"></i> 下单</a></li><li><a href="#cardbuy" data-toggle="tab" <?php if($conf['iskami']==0){?>style="display:none;"<?php }?>><i class="fa fa-credit-card"></i> 卡密</a></li><li><a href="#query" data-toggle="tab"><i class="fa fa-search"></i> 查单</a></li><li><a href="#lqq" data-toggle="tab" <?php if(empty($conf['lqqapi'])){?>style="display:none;"<?php }?>><i class="fa fa-circle-o-notch"></i> 拉圈</a></a></li><li><a href="#chat" data-toggle="tab" <?php if(empty($conf['chatframe'])){?>style="display:none;"<?php }?>><i class="fa fa-comments-o"></i> 交流</a></a></li>
	</ul>
	<div class="modal-body">
		<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="onlinebuy">
          
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon">选择分类</div>
				<select name="tid" id="cid" class="form-control"><?php echo $select?></select>
			</div></div>
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon">选择商品</div>
				<select name="tid" id="tid" class="form-control" onchange="getPoint();"><?php echo $select2?></select>
			</div></div>
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon">商品价格</div>
				<input type="text" name="need" id="need" class="form-control" disabled/>
			</div></div>
			<div class="form-group" id="display_num" style="display:none;">
				<div class="input-group mar-btm"><div class="input-group-addon">下单份数</div>
				<span class="input-group-btn">
				<input id="num_min" type="button" class="btn btn-primary" value="－"/></span>
				<input id="num" name="num" class="form-control" type="number" min="1" value="1" disabled/>
				<span class="input-group-btn"><input id="num_add" type="button" class="btn btn-primary" value="＋"/></span>
			</div></div>
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon" id="inputname">下单ＱＱ</div>
				<input type="text" name="inputvalue" id="inputvalue" value="<?php echo $qq?>" class="form-control" required/>
			</div></div>
			<div id="inputsname"></div>
			<div id="alert_frame" class="alert alert-warning" style="display:none;"></div>
			<div id="pay_frame" class="form-group text-center" style="display:none;">
			<div class="form-group">
				<div class="input-group">
				<div class="input-group-addon">订单编号</div>
				<input class="form-control" name="orderid" id="orderid" value="" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
				<div class="input-group-addon">共需支付</div>
				<input class="form-control" name="needs" id="needs" value="" disabled>
				</div>
			</div>
			<div class="alert alert-success">订单保存成功，请点击以下链接支付！</div>
<?php
if($conf['alipay_api'])echo '<button type="submit" class="btn btn-default" id="buy_alipay"><img src="assets/icon/alipay.ico" class="logo">支付宝</button>&nbsp;';
if($conf['qqpay_api'])echo '<button type="submit" class="btn btn-default" id="buy_qqpay"><img src="assets/icon/qqpay.ico" class="logo">QQ钱包</button>&nbsp;';
if($conf['wxpay_api'])echo '<button type="submit" class="btn btn-default" id="buy_wxpay"><img src="assets/icon/wechat.ico" class="logo">微信支付</button>&nbsp;';
if($conf['tenpay_api'])echo '<button type="submit" class="btn btn-default" id="buy_tenpay"><img src="assets/icon/tenpay.ico" class="logo">财付通</button>&nbsp;';
?>
			</div>
			<input type="submit" id="submit_buy" class="btn btn-primary btn-block" value="立即购买">
		</div>
		<div class="tab-pane fade in" id="cardbuy">
			<?php if(!empty($conf['kaurl'])){?>
			<div class="form-group">
				<a href="<?php echo $conf['kaurl']?>" class="btn btn-default btn-block" target="_blank"/>点击进入购买卡密</a>
			</div>
			<?php }?>
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon">输入卡密</div>
				<input type="text" name="km" id="km" value="" class="form-control" required/>
			</div></div>
			<input type="submit" id="submit_checkkm" class="btn btn-primary btn-block" value="检查卡密">
			<div id="km_show_frame" style="display:none;">
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon" id="inputname">商品名称</div>
				<input type="text" name="name" id="km_name" value="" class="form-control" disabled/>
			</div></div>
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon" id="inputname">下单ＱＱ</div>
				<input type="text" name="inputvalue" id="km_inputvalue" value="<?php echo $qq?>" class="form-control" required/>
			</div></div>
			<div id="km_inputsname"></div>
			<div id="km_alert_frame" class="alert alert-warning" style="display:none;"></div>
			<input type="submit" id="submit_card" class="btn btn-primary btn-block" value="立即购买">
			<div id="result1" class="form-group text-center" style="display:none;">
			</div>
			</div>
		</div>
		<div class="tab-pane fade in" id="query">
			<div class="alert alert-info" <?php if(empty($conf['gg_search'])){?>style="display:none;"<?php }?>><?php echo $conf['gg_search']?></div>
			<div class="form-group">
				<div class="input-group"><div class="input-group-addon">查询内容</div>
				<input type="text" name="qq" id="qq3" value="<?php echo $qq?>" class="form-control" placeholder="请输入下单的QQ" required/>
			</div></div>
			<input type="submit" id="submit_query" class="btn btn-primary btn-block" value="立即查询">
			<div id="result2" class="form-group text-center" style="display:none;">
				<table class="table table-striped">
				<thead><tr><th>下单账号</th><th>商品名称</th><th>数量</th><th>购买时间</th><th>状态</th></tr></thead>
				<tbody id="list">
				</tbody>
				</table>
			</div>
		</div>
		<div class="tab-pane fade in" id="lqq">
			<div class="form-group">
					<div class="alert alert-info">免费拉取QQ名片圈圈赞99+，输入QQ号并提交即可！
		</div>
				<div class="input-group"><div class="input-group-addon">请输入QQ</div>
				<input type="text" name="qq" id="qq4" value="" class="form-control" required/>
			</div></div>
			<input type="submit" id="submit_lqq" class="btn btn-primary btn-block" value="立即提交">
			<div id="result3" class="form-group text-center" style="display:none;"></div>
		</div>
		<div class="tab-pane fade in" id="chat">
			<?php echo $conf['chatframe']?>
		</div>
		</div>
	</div>
</div>
</div>

					     <div id="demo-tabs-box-2" class="tab-pane fade">
					        <div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title"><font color="#fff"><i class="fa fa-warning"></i>&nbsp;&nbsp;<b>注意事项</b></font><span class="pull-right"><a data-toggle="tab" href="#demo-tabs-box-1" aria-expanded="false" class="btn btn-warning btn-rounded"><i class="fa fa-shopping-cart"></i> 下单</a></small>
									</h3>
					            </div>
					            <div class="panel-body">
					                <div id="demo-acc-faq" class="panel-group accordion">
					                    <div class="panel panel-trans pad-top">
					                        <a href="#demo-acc-faq1" class="text-semibold text-lg text-main" data-toggle="collapse" data-parent="#demo-acc-faq">为什么下单很久了都没有开始刷呢？</a>
					                        <div id="demo-acc-faq1" class="mar-ver collapse in">由于本站采用全自动订单处理，难免会出现漏单，部分单子处理时间可能会稍长一点，不过都会完成，最终解释权归本站所有。超过24小时没处理请联系客服！
					                        </div>
					                    </div>
										
					                    <div class="panel panel-trans pad-top">
					                        <a href="#demo-acc-faq2" class="text-semibold text-lg text-main" data-toggle="collapse" data-parent="#demo-acc-faq">空间人气下单方法讲解</a>
					                        <div id="demo-acc-faq2" class="mar-ver collapse">
					                         1.下单前：空间必须是所有人可访问,必须自带1~4条原创说说!<br />2.代刷期间，禁止关闭访问权限，或者删除说说，删除说说的一律由自行负责，不给予补偿。
					                        </div>
					                    </div>
										
					                    <div class="panel panel-trans pad-top">
					                        <a href="#demo-acc-faq3" class="text-semibold text-lg text-main" data-toggle="collapse" data-parent="#demo-acc-faq">说说赞相关下单方法讲解</a>
					                        <div id="demo-acc-faq3" class="mar-ver collapse">1.下单前：空间必须是所有人可访问,必须自带1条原创说说!转发的说说不能刷！<br />2.在“QQ号码”栏目输入QQ号码，点击下面的获取说说ID并选择你需要刷的说说的ID，下单即可。<br />3.代刷期间，禁止关闭访问权限，或者删除说说，删除说说的一律由自行负责，不给予补偿。
					                        </div>
					                    </div>

					                    <div class="panel panel-trans pad-top">
					                        <a href="#demo-acc-faq4" class="text-semibold text-lg text-main" data-toggle="collapse" data-parent="#demo-acc-faq">全民Ｋ歌下单方法讲解</a>
					                        <div id="demo-acc-faq4" class="mar-ver collapse">1.打开你的全名k歌<br />
					                        2.复制你全名k歌里面的需要刷的歌曲链接<br />
					                        3.例如：你歌曲链接是：<font color="#ff0000">https://kg.qq.com/node/play?s= <font color="green">881Zbk8aCfIwA8U3</font> &g_f=personal</font><br />
					                        4.然后把s=后面的 <font color="green">881Zbk8aCfIwA8U3</font> 链接填入到歌曲ID里面，然后提交购买。
					                        </div>
					                    </div>
										
					                    <div class="panel panel-trans pad-top">
					                        <a href="#demo-acc-faq5" class="text-semibold text-lg text-main" data-toggle="collapse" data-parent="#demo-acc-faq">快手代刷下单方法讲解</a>
					                        <div id="demo-acc-faq5" class="mar-ver collapse">1.需要填写用户ID和作品ID，比如<font color="#ff0000">http://www.kuaishou.com/i/photo/lwx?userId= <font color="green">294200023</font> &photoId= <font color="green">1071823418</font> </font> (分享作品就可以看到“复制链接”了) <br />
										2.用户ID就是 <font color="green">294200023</font> 作品ID就是 <font color="green">1071823418</font> ，然后在分别把用户ID和作品ID填上，请勿把两个选项填反了，不给予补单！
					                        </div>
					                    </div>
										
					                    <div class="panel panel-trans pad-top">
					                        <a href="#demo-acc-faq6" class="text-semibold text-lg text-main" data-toggle="collapse" data-parent="#demo-acc-faq">Q会员/钻下单方法讲解</a>
					                        <div id="demo-acc-faq6" class="mar-ver collapse">1.下单之前，先确认输的信息是不是正确的，如果密码输错，那就刷不了了，没到账之前不要改密码 <br />
										    2.Q会员/钻因为需要人工处理，所以每天不定时开刷，24小时-48小时内到账！
					                        </div>
					                    </div>
					           </div>
							</div>
					     </div>
						</div>
					</div>

<?php
$strtotime=strtotime($conf['build']);//获取开始统计的日期的时间戳
$now=time();//当前的时间戳
$yxts=ceil(($now-$strtotime)/86400);//取相差值然后除于24小时(86400秒)
$time =date("Y-m-d").' 00:00:01';
$count1=$DB->count("SELECT count(*) from shua_orders");
$count2=$DB->count("SELECT count(*) from shua_orders where status>=1");
$count3=$DB->count("SELECT sum(money)  from shua_pay where status=1");
$count4=round($count3, 2);
$count5=$DB->count("SELECT count(*) from `shua_orders` WHERE  `addtime` > '$time'");
$count6=$DB->count("SELECT sum(money)  FROM `shua_pay` WHERE `addtime` > '$time' AND `name` != '在线充值余额' AND `status` = 1");
$count7=round($count6, 2);
?>
                      <div class="row">
                          <div class="col-lg-6">
                          <div class="panel panel-success panel-colorful">
					                    <div class="pad-all media">
					                        <div class="media-left">
					                            <i class="demo-pli-coin icon-3x icon-fw"></i>
					                        </div>
					                        <div class="media-body">
					                            <p class="h3 text-light mar-no media-heading"><?php echo ($count4+300000)?>元</p>
					                            <span>累计交易金额</span>
					                        </div>
					                    </div>
					                    <div class="progress progress-xs progress-success mar-no">
					                        <div role="progressbar" aria-valuenow="<?php echo $count7?>" aria-valuemin="0" aria-valuemax="1000" class="progress-bar progress-bar-light" style="width: <?php echo $count7?>%"></div>
					                    </div>
					                    <div class="pad-all text-sm">
					                        今天交易金额 <span class="text-semibold"><?php echo ($count7+10000)?></span> 元
					                    </div>
					                </div>
                          </div>
                          <div class="col-lg-6">
                          <div class="panel panel-info panel-colorful">
					                    <div class="pad-all media">
					                        <div class="media-left">
					                            <i class="demo-pli-add-cart icon-3x icon-fw"></i>
					                        </div>
					                        <div class="media-body">
					                            <p class="h3 text-light mar-no media-heading"><?php echo ($count1+200000)?>条</p>
					                            <span>累计订单总数</span>
					                        </div>
					                    </div>
					                    <div class="progress progress-xs progress-dark-base mar-no">
					                        <div role="progressbar" aria-valuenow="<?php echo $count5?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: <?php echo $count5?>%"></div>
					                    </div>
					                    <div class="pad-all text-sm bg-trans-dark">
					                        今天订单总数 <span class="text-semibold"><?php echo ($count5+10000)?></span> 条
					                    </div>
					                </div>
                          </div>
                      </div> 

<div class="panel panel-primary" <?php if($conf['bottom']==''){?>style="display:none;"<?php }?>>
<div class="panel-heading"><h3 class="panel-title"><font color="#fff"><i class="glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp;<b>站点助手</b></font></h3></div>
<?php echo $conf['bottom']?>
<!--统计代码开始-->
<!--请输入统计代码-->
<!--统计代码结束-->
</div>

	<div class="modal fade" id="fzjs" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">关于代刷网分站搭建</h4>
                </div>
				<div class="modal-body">
				<div class="alert alert-primary">代刷网分站开通时长为永久，需要搭建可以在线购买！<br>后台账号密码就是自己登录分站后台的时候用的账号密码，分站账号可以为自己的QQ，密码不能太过于简单，能够记住且不能被别人猜中就行，域名前缀那里，比如你填<font color="#FF8C00">123abc</font>，则你的分站网址就是 <font color="#FF8C00">123abc.qtizy.cn</font>，如果不会的话可以参考下图 </div><img src="./assets/img/zxqm.png" width="100%" height="100%"> 
				<div class="alert alert-primary">你可以把你的网站分享给朋友，快手群，互赞群，有人来下单，你就有提成，分站不能上架自己的商品，商品全部对接主站，所有订单由主站处理，分站拿提成，分站可以修改商品价格（价格不能低于代理价），售价减去代理价等于利润，售价越高，赚的越多，当然，也要有分寸。</div><img src="./assets/img/tc.png" width="100%" height="100%"> <div class="alert alert-primary">提成会被存在网站里的账户中，大于10元就可以申请提现，支付QQ红包，微信红包，支付宝</div>
				  </div> 
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                </div>
            </div>
        </div>
      </div>
	  
	<div class="modal fade" id="api" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">欢迎对接本平台</h4>
                </div>
				<div class="modal-body">
				<center>
				本站接口地址：<font color="#38B0DE">http://<?php echo $_SERVER['HTTP_HOST']?>/</font></br>可以将其嵌入您的网站！
     			</center>
				  </div> 
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                </div>
            </div>
        </div>
      </div>

</div>
<script>
<!--
document.write(unescape("%3Cscript%3E%0A%3C%21--%0Adocument.write%28unescape%28%22%253Cscript%253E%250A%253C%2521--%250Adocument.write%2528unescape%2528%2522%25253Cscript%25253E%25250A%25253C%252521--%25250Adocument.write%252528unescape%252528%252522%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/icons.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/pace.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/jquery-2.2.4.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/bootstrap.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/nifty.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/nifty-demo.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/morris.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/raphael.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/jquery.sparkline.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/dashboard.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522assets/js/iconss.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522//cdn.bootcss.com/layer/3.0.1/layer.min.js%25252522%2525253E%2525253C/script%2525253E%2525250A%25252520%25252520%25252520%25252520%2525253Cscript%25252520src%2525253D%25252522//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js%25252522%2525253E%2525253C/script%2525253E%252522%252529%252529%25253B%25250A//--%25253E%25250A%25253C/script%25253E%2522%2529%2529%253B%250A//--%253E%250A%253C/script%253E%22%29%29%3B%0A//--%3E%0A%3C/script%3E"));
//-->
</script>
<script type="text/javascript">
var isModal=<?php echo empty($conf['modal'])?'false':'true';?>;
var ui_bing=<?php echo ($conf['ui_bing']==1)?'true':'false';?>;
var hashsalt='<?php echo $addsalt?>';
</script>
<script src="assets/js/main.js?ver=<?php echo VERSION ?>"></script>
</body>
</html>