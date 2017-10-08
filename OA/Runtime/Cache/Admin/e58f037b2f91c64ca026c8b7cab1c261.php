<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/oaxt/Public/Admin/css/bootstrap.min.css">
	<script src="/oaxt/Public/Admin/js/jquery.min.js"></script>
	<script src="/oaxt/Public/Admin/js/bootstrap.min.js"></script>
	<script src="/oaxt/Public/Admin/js/holder.min.js"></script>
	<!-- <link rel="stylesheet" href="./Public/css/index.css"> -->

	<style>
		.login
		{
		width: 500px;
		height: 320px;
		box-shadow:0 0 5px #888;
		margin: 80px auto 0px auto;
		border-radius:10px;
		box-sizing:border-box;
		padding: 30px;
		}
		.verify{
			cursor:pointer;
		}
		body{
			background: url('/oaxt/Public/Admin/img/bg1.jpg') no-repeat center center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="/oaxt/Public/Admin/img/logo.png" alt="" style="width:80px;height: 80px;">
		</div>
		<div class="login">	
			<form action="/oaxt/index.php/Admin/Login/check" method="post">
				<div class="form-group">
					<label for="" >用户名:</label>
					<input type="text" class="form-control" name="username">

				</div>
				<div class="form-group">
					<label for="">密码：</label>
					 <input type="text" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label for="">验证码:</label>
					<div class="row">
						<div class="col-md-8">
							<input type="text" class="form-control" name="fcode">
					    </div>
						<div  class="col-md-2">
							<img src="/oaxt/index.php/Admin/Login/verify" alt="" onclick="this.src='/oaxt/index.php/Admin/Login/verify/rand='+Math.random()" class="verify">
						</div>

				    </div>
				
				</div>
				<input type="submit" value="提交" class="btn btn-success">
				<input type="reset" value="取消" class="btn btn-danger">
			</form>
		</div>	
	</div>
</body>
</html>