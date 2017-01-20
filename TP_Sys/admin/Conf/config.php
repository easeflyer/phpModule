<?php

return array(
    'SHOW_PAGE_TRACE' => true, // 开启调试跟踪显示

    /* 数据库设置 */
    'DB_TYPE' => 'mysqli', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'node',
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'ease_', // 数据库表前缀
    'PAGE_SIZE' => 15, // 默认分页 数据条数
//    'DB_FIELDTYPE_CHECK' => false, // 是否进行字段类型检查  数据库通常会自动处理必要的转换 参见手册14.2
//    'DB_FIELDS_CACHE' => true, // 启用字段缓存，缓存数据表的 字段信息。表结构信息 参考手册 6.3
    'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8,    
    // 模块分组 配置
    'URL_MODEL' => 0, // rewrite 模式。
    'APP_GROUP_LIST' => 'Admin,Demo', // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
    'DEFAULT_GROUP' => 'Demo', // 默认分组
    'TMPL_PARSE_STRING' => array(
        '__APPURL__' => '/ea3/Sys/',
        '__THEME__' => 'gray'  //默认easyui主题    
    ),
    //RBAC权限控制
    'USER_AUTH_ON' => true, //是否需要认证
    'USER_AUTH_TYPE' => 2, //认证类型  2 代表通过数据库进行验证，每次获得 access_list 都通过数据库获得。而不是 session
    'USER_AUTH_KEY' => 'userid', //认证识别号,用户登录要存储到session中的下标值
    'ADMIN_AUTH_KEY' => 'isAdmin', //超级管理员的识别标签如果是超级管理员需要在登录之后将 $_SESSION['isAdmin']=true,此时用户将不受rbac权限控制
    //REQUIRE_AUTH_MODULE       //需要认证模块,基本不用在后台大部分模块都是需要权限验证的。ease：这里不设置的意思是:都需要验证?
    'NOT_AUTH_MODULE' => 'Public,Admin', //无需认证模块,不要登陆就能够使用功能，比如登录，处理登录，验证码；没有进行分组，只在 RBAC 控制的范围 进行判断。
    // ease:这里无需认证的模块 不为空，代表 这两个模块 不要认证， 同时根据 checkAccess 方法的算法，没有再此列表的 都需要认证。
    'USER_AUTH_GATEWAY' => 'index.php?g=admin&m=Public&a=login', //认证网关 登录验证的地址，当用户处于未登录状态，则跳到认证网关进行登录
    //RBAC_DB_DSN  //数据库连接DSN,如果rbac的数据与当前不太相同，使用该配置项进行单独配置
    'RBAC_ROLE_TABLE' => 'ease_role', //角色表名称
    'RBAC_USER_TABLE' => 'ease_roleuser', //用户表名称 注意这里不是真正的用户表。而是 用户 和 角色对应的表。
    'RBAC_ACCESS_TABLE' => 'ease_access', //权限表名称
    'RBAC_NODE_TABLE' => 'ease_node', //节点表名称    
);
?>