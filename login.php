<?php
require_once ('lib/lib.php'); 
 
?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php includeScripts();?>
		<script src="login/login.js"></script>
		
		<script>
			$(document).ready(function(){
				 
				/*注册按钮事件*/
				$("#register").click(function(){
					var n = $("#name").val();
					var p = $("#password").val();
					if( validate(n,p))
						register(n,p);
				});
				
				//登录按钮事件
				$("#login").click(function(){
					var n = $("#name").val();
					var p = $("#password").val();
					if( validate(n,p)) {
						login(n,p);
					}
				});
			});

			function validate(n,p)
			{
				if(n == '' || p == ''){
					alert("用户名和密码不能为空");
					return false;
				}
				return true;
			}
		</script>
		<style type="text/css">
			label.ui-input-text {
				font-size: x-large ;
			}
		</style>
	</head>
	<body>
		<div data-role="page">
			<div data-role="header">
				<h1>登陆</h1>
			</div>
			<div data-role="content">
			  <div style="margin:0 auto; text-align:center">
				 <img src="images/logo.png" width="100px" height="100px">
			  </div>
			  <div data-role="fieldcontain">
				<label for="name">用户名：</label>
				  <input type="text" id="name" name="name"/>
			  </div>
			  <div data-role="fieldcontain">
				<label for="password">密码：</label>
				  <input type="password" id="password" name="password""/>
			  </div>
			  <div style="margin:0 auto; text-align:center">
				<input type="button" id="login" data-inline="true" value="登录"/>
				<input type="button" id="register" data-inline="true" value="注册"/>
			  </div>
			</div>
		</div>
	</body>
</html>