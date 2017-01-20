<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>编辑角色</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/ui/themes/icon.css" />
<script type="text/javascript" src="__PUBLIC__/ui/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/ui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/ui/locale/easyui-lang-zh_CN.js"></script>
<style type="text/css">
*{ margin:0; padding:0; color:#363636}
a{text-decoration:none; color:#000}

</style>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/tableform.css" />
   
</head>

<body>
    <div class="easyui-panel" data-options="
	title:'编辑管理员',
	border:false,
	iconCls:'icon-group_edit'
">
        <form name="f1" action="" method="POST" enctype="multipart/form-data">
            <table class="table-form" border="1" width="100%">
                <tr>
                    <th>角色名称</th>
                    <td>
                        <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
                        <input type="text" name="name" class="ipt" required value="<?php echo ($data["name"]); ?>">
                    </td>
                </tr>
                <tr>
                    <th>禁用</th>
                    <td>
                       否&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="1"
                        <?php if($data[status] == 1): ?>checked<?php endif; ?>
                        />&nbsp;&nbsp;&nbsp;是&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="0"
                        <?php if($data[status] == 0): ?>checked<?php endif; ?>
                         />
                    </td>
                </tr>
                <tr>
                    <th>说明</th>
                    <td>
                        <textarea name="remark"  cols="65" rows="10"><?php echo ($data[remark]); ?></textarea>
                    </td>
                </tr>
                
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" name="s1" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="r1" value="清除">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>