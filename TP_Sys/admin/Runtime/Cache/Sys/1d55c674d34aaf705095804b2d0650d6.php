<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/ui/themes/icon.css" />
<script type="text/javascript" src="__PUBLIC__/ui/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/ui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/ui/locale/easyui-lang-zh_CN.js"></script>
<style type="text/css">
*{ margin:0; padding:0; color:#363636}
a{text-decoration:none; color:#000}

</style>
</head>
<body>
<script type="text/javascript">
	var _msg='<?php echo ($message); ?>';
	var _msg1='<?php echo ($error); ?>';
	var _jumpurl='<?php echo ($jumpUrl); ?>';
	$(function(){
		if(_msg){
		$.messager.alert('提示',_msg,'info',function(){
			if(_jumpurl){
			window.location.href=_jumpurl
			}else{
			window.history.go(-1);
			}
		}); 
		}
		if(_msg1){
		$.messager.alert('提示',_msg1,'info',function(){
			if(_jumpurl){
			window.location.href=_jumpurl
			}else{
			window.history.go(-1);
			}
		}); 
		} 
	})
</script>
</body>
</html>