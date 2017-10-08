<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/oaxt/Public/Home/css/bootstrap.min.css">
	<script src="/oaxt/Public/Home/js/jquery.min.js"></script>
	<script src="/oaxt/Public/Home/js/bootstrap.min.js"></script>
	<script src="/oaxt/Public/Home/js/move.js"></script>
	<style>.navbar a,.nav a{color:#fff;} .navbar a:hover{color:#000;}
	.logosign{position: absolute;top: 10px;font-size: 1.3em;}
	.logosign2{position: relative;top: 25px;transform: rotateX(180deg);font-size: 1.3em;color: rgba(255,255,255,0.2);z-index: 0;}
	.logosign2 span{display: block;background-color: #426184;height: 8px;width: 164px;position: absolute;top: 2px;z-index: 3;opacity: 0.8;}
	.oa{width: 144px;height: 44px;position: absolute;top: 5px;background: url(img/OA.png) no-repeat;}
	.container{margin-top: 10px;background-color: #BDD7DE;}
	.listdiv{height: 50px;line-height: 50px;position: absolute;right: 0px;top: 0px;background: url(img/bg1.png) no-repeat  90% 0;}	
	.ul-nav{background-color: #DEEBEF;text-align: center;}
	.menuleft li{ margin-left: 30px;}
	blockquote.pull-right{border-right-width: 0px;}
	a:hover{text-decoration: none;}
	.activeinfo{display:block !important;}
	.noper{display: none;width:975px;margin-left: 209px;margin-top: 30px;}
	.notice li{display:block;height: 30px;overflow: hidden;text-align: left;margin-top:8px;position: relative;}
	.notice{padding-top:10px; overflow: hidden;}
	.notice li div{ position:absolute; top:-30px;}
	.notice li div p { height:30px;}
	/*.contents{position: relative;top: -3px;margin-left: 3px;}*/
	</style>
</head>
<body>
	<div class="container-fulid">
		<!-- 导航条 start -->
		<nav class="navbar" style="background-color:#563D7C;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-exapmple-navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">OA办公系统</a>
			</div>
			<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right ">
					<li><a href="">首页</a></li>
					<li><span class="btn" style="margin-top:6px;color:#fff"><b><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i; echo ($dat[username]); endforeach; endif; else: echo "" ;endif; ?></b>欢迎您！<span class="badge glyphicon glyphicon-envelope" style="background:red;">100</span></span></li>
					<li><a href="">退出</a></li>
				</ul>
			</div>
		</nav>	
		<!-- 导航条end -->		
		<div class="container">
		<div class="row">
		  	<div class="col-md-2 col-sm-2 col-xs-2  ul-nav" style="border-right:1px solid #CCCCCC;">
			  	<ul class="text-info list-unstyled menuleft">
					<li class="list-group text-left"><span class="glyphicon glyphicon-user "></span><a href="javascript:;">个人事务</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-transfer"></span><a href="javascript:;">工作流</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-tower"></span><a href="javascript:;">行政办公</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-list-alt"></span><a href="javascript:;">个人绩效</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-book"></span><a href="javascript:;">知识管理</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-user"></span><a href="javascript:;">人力资源</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-tasks"></span><a href="javascript:;">培训管理</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-hand-up"></span><a href="javascript:;">考勤管理</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-globe"></span><a href="javascript:;">职员交流天地</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-asterisk"></span><a href="javascript:;">附件程序</a></li>
					<li class="list-group text-left" ><span class="glyphicon glyphicon-dashboard"></span><a href="javascript:;">个人计划</a></li>
				</ul>  	
			</div>
		  <div class="col-md-10  col-sm-10  col-xs-10 department">
		  		<ul class="list-unstyled list-inline">
					<li>用户名：</li>
					<li class="">所在部门:</li>
					<liclass="">职务：</li>
					<li class="pull-right " id="dateTip"></li>
				</ul>
		  </div>
		<div class="contents">
				<div class="person activeinfo">
					  <div class="col-md-3 col-sm-3 col-xs-3 text-center bg-danger " style="height: 180px;margin-left: 40px; border: 1px solid #ccc"><a href="">公告</a>
						<ul class="list-unstyled notice ul1">
							<li>
								<div>
									<p>本公司发布的第一条公告十gfg</p>
									<p>本公司发布的第一条公告sdf</p>
								</div>
							</li>
							<li>
								<div>
									<p>本公司发布的第二条公告十fdgdf</p>
									<p>本公司发布的第一条公告sdfsd</p>
								</div>
							</li>
							<li>
								<div>
									<p>本公司发布的第三条公告dgsdg</p>
									<p>本公司发布的第一条公告sdfsd</p>
								</div>
							</li>
							<li>
								<div>
									<p>本公司发布的第四条公告adff</p>
									<p>本公司发布的第一条公告sdfsf</p>
								</div>
							</li>
							<li>
								<div>
									<p>本公司发布的第五条公告adff</p>
									<p>本公司发布的第一条公告sdfsf</p>
								</div>
							</li>
					
						</ul>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-3 text-center bg-danger" style="height: 180px; border: 1px solid #ccc;"><a href="">电子邮件</a>
						<ul class="list-unstyled notice ul2">
							<li><div><p>张敏（关于发展公司的企业文化</p><p>张敏（关于发展公司的企业文化</p></div></li>
							<li><div><p>张敏（关于上周的公司发展计划）</p><p>张敏（关于公司战略转移相关）</p></div></li>
							<li><div><p>张敏（关于招商投标相关事宜）</p><p>张敏（关于招商投标相关事宜</p></div></li>
							<li><div><p>张敏（关于公司战略转移相关）</p><p>张敏 (关于对李达康的带薪停职)</p></div></li>
							<li><div><p>张敏 (关于对李达康的带薪停职)</p><p>张敏（关于公司战略转移相关）</p></div></li>
						</ul>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-3 text-center bg-danger" style="height: 180px; border: 1px solid #ccc;"><a href="">投票</a></div>
					  
					  
					  <div class="col-md-3 col-sm-3 col-xs-3 text-center bg-danger " style="height: 180px;margin-left: 40px; border: 1px solid #ccc"><a href="">个人文件柜</a></div>
					  <div class="col-md-3 col-sm-3 col-xs-3 text-center bg-danger" style="height: 180px; border: 1px solid #ccc;"><a href="">日程安排</a></div>
					  <div class="col-md-3 col-sm-3 col-xs-3 text-center bg-danger" style="height: 180px; border: 1px solid #ccc;"><a href="">工作日志</a></div>
				
					<blockquote class="pull-right">	
						<footer style="font-size: 15px;"><a href="">更多</a></footer>
					</blockquote>
				</div>
			
				<div class="workstream noper">
					<div class="table-responsive">
					  <table class="table">
						<tr class="active">1</tr>
						<tr class="success">1</tr>
						<tr class="warning">1</tr>
						<tr class="danger">askdjahjh</tr>
					  </table>
					</div>
				</div>
				<div class="administration noper">
					行政办公
				</div>
				<div class="performance noper">
					绩效
				</div>
				<div class="knowledge noper">
					知识管理
				</div>
				<div class="hr noper">
					人力资源
				</div>
				<div class="train noper">
					培训
				</div>
				<div class="attendance noper">
					考勤
				</div>
				<div class="zoom noper">
					交流天地
				</div>
				<div class="accessory noper">
					附件程序
				</div>
				<div class="plan noper">
					个人计划
				</div>
			</div>
		</div>
	</div>	
</div>
</body>
<script type="text/javascript">
function currentTime(){ 
		  var d=new Date(),str=''; 
		  var show_day=new Array('星期一','星期二','星期三','星期四','星期五','星期六','星期日');
		  str+=d.getFullYear()+'年'; 
		  str+=d.getMonth() + 1+'月'; 
		  str+=d.getDate()+'日'; 
		  str+=d.getHours()+'时'; 
		  str+=d.getMinutes()+'分'; 
		  str+= d.getSeconds()+'秒';
		  str+=' '+show_day[d.getDay()-1]+' ';
		  return str; 
		} 
setInterval(function(){$('#dateTip').html(currentTime)},1000);

$('.menuleft li').click(function(){
		ind=$(this).index();
		// alert(ind);
		$('.contents').children().eq(ind).addClass('activeinfo').siblings().removeClass('activeinfo');
		$('.contents').children().eq(ind).show().siblings().hide();
});

// //百叶窗
var oul1=$('.ul1');
var oul2=$('.ul2');
toshow(oul1);
setInterval(function(){toshow(oul2);},2000);
function toshow(obj){
	var adiv=$('.notice li div');
var inow=0;
var timer=null;
var bbtn=true;

setInterval(function(){ tochange();},4000);

	function tochange(){

	timer=setInterval(function(){
		
		if(inow==adiv.length){
			clearInterval(timer);
			inow=0;
			bbtn=!bbtn;		

		}else if(bbtn){
		    startMove(adiv[inow],{'top':0});
			inow++;
		}else{
            startMove(adiv[inow],{'top':-30});
            inow++;
		}

	 },100);	

	}

}
//百叶窗end


</script>
</html>