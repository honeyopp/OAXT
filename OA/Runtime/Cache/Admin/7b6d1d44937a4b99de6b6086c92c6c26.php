<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/oaxt/Public/admin/css/bootstrap.min.css">
	<script src="/oaxt/Public/admin/js/jquery.min.js"></script>
	<script src="/oaxt/Public/admin/js/bootstrap.min.js"></script>
	<script src="/oaxt/Public/admin/js/holder.min.js"></script>
	<script>menu="<?php echo ($_GET[menu]); ?>"?"<?php echo ($_GET[menu]); ?>":"positiontype";</script>
	<style>
		.left{border-right: 1px solid #ccc;}
		.times{display: block;margin-top: -40px;border-radius: 5px;position: relative;right:-45px;outline: none;}
		/*.employees{display: block;}*/

		
	</style>
</head>
</head>
<body>	

	<div class="container">	

		<!-- <h3 class="page-header">OA后台管理系统</h3> -->
		<!-- 导航条 start -->
		<nav class="navbar navbar-default" role="navigation" style="background-image:url(/oaxt/Public/admin/img/bg1.png) ,url(/oaxt/Public/admin/img/bg2.png);background-repeat:no-repeat;background-position:100% 100%,0%,100%">
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
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">后台首页</a></li>
					<!-- <li><a href="">重新登录</a></li> -->
					<li><a href="/oaxt/index.php/Admin/Login/logout">退出</a></li>
				</ul>
			</div>
		</nav>	
		<!-- 导航条end -->	
		<!-- 后台内容区域 start -->
		<div class="row">
			<div class="col-md-2 left">

				<div class="panel panel-primary text-center user">
					<div class="panel-heading">
						<a href="javascript:;" class=" btn list-group-item active">职员管理</a>
					</div>

					<div class="panel-body">
						<a href="<?php echo U('index',array('menu'=>user,'code'=>1));?>" class="list-group-item">查看职员</a>
						<a href="<?php echo U('index',array('menu'=>user,'code'=>2));?>" class="list-group-item">添加职员</a>
					</div>
					
				</div>
				

				<div class="panel panel-primary text-center notice">
					<div class="panel-heading">
						<a href="javascript:;" class=" btn list-group-item active">公告管理</a>
					</div>
					<div class="panel-body">
						<a href="<?php echo U('announcement',array('menu'=>notice,'code'=>1));?>" class="list-group-item ">查看公告</a>
						<a href="<?php echo U('announcement',array('menu'=>notice,'code'=>2));?>" class="list-group-item ">添加公告</a>
					</div>
				</div>

				<div class="panel panel-primary text-center askleave">
					<div class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">请假管理</a>
					</div>
					<div class="panel-body">
						<a href="<?php echo U('askleave',array('menu'=>askleave,'code'=>1));?>" class="list-group-item ">查看请假</a>
						<a href="<?php echo U('askleave',array('menu'=>askleave,'code'=>2));?>" class="list-group-item ">新增请假条</a>
					</div>
				</div>

				<div class="panel panel-primary text-center leavetype">
					<div class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">请假类型管理</a>
					</div>

					<div class="panel-body">
						<a href="<?php echo U('leavetype',array('menu'=>leavetype,'code'=>1));?>" class="list-group-item ">查看请假类型</a>
						<a href="<?php echo U('leavetype',array('menu'=>leavetype,'code'=>2));?>" class="list-group-item">新增请假类型</a>
					</div>
				</div>	
				<div class="panel panel-primary text-center department">
					<div class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">部门管理</a>
					</div>
					<div class="panel-body">
						<a href="<?php echo U('department',array('menu'=>department,'code'=>1));?>" class="list-group-item  ">查看部门</a>
						<a href="<?php echo U('department',array('menu'=>department,'code'=>2));?>" class="list-group-item  ">新增部门</a>
					</div>
				</div>

				<div class="panel panel-primary text-center grant">
					<div  class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">权限管理</a>
					</div>
					<div class="panel-body">
						<a href="<?php echo U('grant',array('menu'=>grant,'code'=>1));?>" class="list-group-item ">查看用户权限</a>
						<a href="<?php echo U('grant',array('menu'=>grant,'code'=>2));?>" class="list-group-item ">权限分配</a>
					</div>
					
				</div>	
				<div class="panel  panel-primary text-center position">
					<div  class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">职位管理</a>
					</div>
					<div class="panel-body">
						<a href="<?php echo U('position',array('menu'=>position,'code'=>1));?>" class="list-group-item">查看职位</a>
						<a href="<?php echo U('position',array('menu'=>position,'code'=>2));?>" class="list-group-item">新增职位</a>	
					</div>
				</div>	

				<div class="panel panel-primary text-center positiontype">
					<div class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">权限类型管理</a>
					</div> 
					<div class="panel-body">
						<a href="<?php echo U('positiontype',array('menu'=>positiontype,'code'=>1));?>" class="list-group-item">查看权限类型</a>
						<a href="<?php echo U('positiontype',array('menu'=>positiontype,'code'=>2));?>" class="list-group-item">新增类型管理</a>
					</div>
				</div>	
				<div class="panel panel-primary text-center system">	
					<div class="panel-heading">
						<a href="javascript:;" class="btn list-group-item active">系统管理</a>
							
					</div>
					<div class="panel-body">
						<a href="<?php echo U('system',array('menu'=>system,'code'=>1));?>" class="list-group-item ">系统日志</a>
						<a href="<?php echo U('system',array('menu'=>system,'code'=>2));?>" class="list-group-item ">数据备份</a>
						<a href="<?php echo U('system',array('menu'=>system,'code'=>3));?>" class="list-group-item ">修改密码</a>
					</div>
				</div>
			</div>
			<div class="col-md-10 right">
				
				
				
				
				
				
				
				
				
			</div>
		</div>
		<!-- 后台内容区域 end -->
	</div>
</body>
<script>
	
	$('.panel-heading').eq(7).siblings().show();
	$('.panel-body').not($('.panel-body').eq(7)).hide();
	$('.btn').click(function(){
		$(this).parent().next().slideDown();
		$('.btn').parent().next().not($(this).parent().next()).slideUp()

	});

</script>
</html>