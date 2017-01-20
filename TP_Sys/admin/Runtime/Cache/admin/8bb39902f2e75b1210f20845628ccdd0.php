<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Windows-Target" content="_top">
    <title>系统管理后台登录</title>
    <script>
        //  解决 登录页面有时 在框架窗口显示，再次登录则框架被加载两次的问题。
        if (self != top) { top.location = self.location; } 
        </script>
    <style>
    * {
        margin: 0;
        padding: 0;
        color: #666;
        font-family: 微软雅黑
    }
    body{
    	background: #abcdef;
    }
    .login{
    	width: 600px;
    	height: 300px;
		background: #f1f1f1;
		border:1px solid #ccc;
		position: absolute;
		left:50%;
		top:50%;
		margin-left: -300px;
		margin-top: -150px;
		box-shadow: 0 0 20px rgba(0,0,0,.3);

    }
    .login h3{
		font-size:24px;
		height: 2em;
		line-height: 2em;
		text-align: center;
		color: #888;
    }
    dl dt,
    dl dd{
    	float: left;
    	height: 36px;
    	line-height: 36px;
    	margin:5px 0;
    }
    dl{
    	clear: both;
    	width: 400px;
    	margin:0 auto;
    }
    dt{
    	width: 80px;
    	font-size: 16px;
    	
    	color: #888;
    }
    dd{
    	width: 320px;
    }
    .ipt{
    	width: 260px;
    	height: 28px;
    	line-height: 28px;
    	padding-left: 5px;
    	border:2px solid #ccc;
    	background: #fff;
		border-radius: 5px ;

    }
    .b1{
    	padding: 5px;
    	width: 100px;
    	font-size: 16px
    }
    </style>
    <script>
    	function changepic(obj){
    		obj.src=obj.src+'&nocache='+Math.random();
    	}
    </script>
</head>

<body>
	<div class="login">
		<h3>后台管理系统登陆</h3>
		<form action="" name="f1" method="post" style="margin-top: 20px;">
			<dl>
				<dt>用户名：</dt>
				<dd><input class="ipt" type="text" name="username" required ></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input class="ipt" type="password" name="pwd" required ></dd>
			</dl>
			<dl>
				<dt>验证码</dt>
				<dd><input class="ipt" type="text" name="code" style="width: 120px; float: left;" required><img src="index.php?g=admin&m=Public&a=verify" style="float: left; margin-top: 4px; margin-left: 5px; cursor: pointer;" onclick="changepic(this)"></dd>
			</dl>
			<dl>
				<dt></dt>
				<dd><input class="b1" type="submit" name="s1" value="登录">&nbsp;&nbsp;<input class="b1" type="reset" name="r1" value="清除"></dd>
			</dl>
		</form>
	</div>
</body>

</html>