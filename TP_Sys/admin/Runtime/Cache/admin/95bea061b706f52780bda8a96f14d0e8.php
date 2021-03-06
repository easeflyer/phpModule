<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>配置权限</title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/ui/themes/icon.css" />
<script type="text/javascript" src="__PUBLIC__/ui/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/ui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/ui/locale/easyui-lang-zh_CN.js"></script>
<style type="text/css">
*{ margin:0; padding:0; color:#363636}
a{text-decoration:none; color:#000}

</style>
        <style>
            .easyui-tree{ width: 90%; margin-top: 10px; margin-left: 10px }
            .easyui-tree>li>ul>li>ul>li{ float: left; margin:5px 0; }
            .easyui-tree>li,
            .easyui-tree>li>ul>li{ clear: both; margin:10px 0; }

        </style>
        <script>
            var roleid = '<?php echo ($roledata["id"]); ?>';
            // 注意下面的  $.post 将对权限信息 通过 ajax 方式进行保存。
            function handledata() {
                //取得所有选项
                var _ret = $('#mytree').tree('getChecked');
                var _len = _ret.length;
                //if (_len <= 0) return;
                var _str = '';
                for (var i = 0; i < _len; i++) {
                    var _node = _ret[i];
                    // 循环遍历 所有的 选中节点。也就是除了子节点外，包括其父节点。
                    //注意这里 只要一个 子权限被勾选，则它的父权限也被勾选 保存到 access 表中。
                    while (_node != null) {
                        _str += ',' + _node.id;
                        // 得到 父节点对象
                        _node = $('#mytree').tree('getParent', _node.target);
                    }

                }
                _str = _str.substr(1); // 去掉第一个 逗号
                //alert(_str);exit; 
                // _str 里面会有 重复值，原因是 子节点 具有相同的父节点，所以父节点可能被重复添加进来
                var _url = "index.php?g=admin&m=rbac&a=addaccess";
                $.post(_url, {ids: _str, roleid: roleid}, function (data) {
                    if (data == 1) {
                        alert("权限配置成功");
                    } else {
                        alert("权限配置失败");
                    }
                })
            }

        </script>
    </head>

    <body>
        <div class="easyui-panel" data-options="
             title:'配置【<?php echo ($roledata[name]); ?>】权限',
             border:false,
             iconCls:'icon-group'
             ">
            <div style="margin: 10px">
                <a href="<?php echo U('Rbac/managerole');?>" class="easyui-linkbutton" data-options="
                   iconCls:'icon-arrow_turn_left',
                   plain:true
                   ">返回</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" data-options="
                   iconCls:'icon-box',
                   plain:true
                   " onclick="handledata()">保存</a>
            </div>
            <!--这里读取 节点树用于分配权限，上面的保存按钮应该可以保存节点树的更新，roleid 当前角色id，并且采用get 方式传递这个参数给 url-->
            <!--checkbox:true 打开 勾选框
            easyui-tree 每个节点，有 text,和 checked 属性 因此 combotreejson1 方法 需要提供这两个属性。
            -->
            <ul id="mytree" class="easyui-tree" data-options="
                url:'<?php echo U('Rbac/combotreejson1',array('roleid'=>$roledata[id]));?>',
                checkbox:true,
                animate:true,
                ">
            </ul>
        </div>
    </body>

</html>