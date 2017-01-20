系统模块

功能概述：

     包含应用系统开发所最常用的后台功能。管理员管理（管理员表），功能节点管理（节点表），权限管理
     大多数应用系统都可以先有了这个模块架构，然后就可以利用节点管理，逐渐增加功能了。（建表，建立模块）

数据库结构：

     node         节点表，权限节点定义
     access       角色节点表（role_id,node_id,  角色的权限分配）
     role           角色表
     roleuser    角色用户表（role_id,user_id）
     user          用户表（后台管理用户）

功能列表：

     管理员管理
          管理员用户的增删改，角色分配
     角色管理
          角色 增删改，管理成员（roleuser），分配权限（access）
     节点管理
          节点增删改

功能描述：

     角色分配：给具体的用户，指定若干角色。则用户具备了 角色所包含的权限。
     节点管理：注意节点的英文名称。要和方法名称，模块名称一致。节点的级别指定了节点是一个方法，还是一个模块。

目录结构

     <admin>          应用目录
     <Public>          公共目录
     <ThinkPHP>    ThinkPHP 3.1.3
     index.php         应用入口文件
     node.sql           初始数据库文件

     <admin>
          <Conf>
               config.php     主要的配置文件，里面包含系统重要配置
          <Lib>
               <Action>
                    <Admin>
                         AdminAction.class.php          后台管理界面，菜单
                         CommonAction.class.php     公共类：所有需要权限控制的类继承自公共类
                         PublicAction.class.php          登陆，退出，验证码等
                         RbacAction.class.php            权限，用户，角色等管理。
                         Demo1Action.class.php        其他功能模块，权限设置演示
           <Tpl>
               <Admin>     以上模块对应的模板

系统安装

     1）将以上目录结构，原样拷贝到一个子目录。
     2）导入数据库node.sql
     3）修改配置文件  config.php
     4）验证安装：登陆系统index.php?g=Admin&m=Public&a=login，检查各个功能是否正常。