<?php
return array(
	//'配置项'=>'配置值'
    'AUTH_CONFIG'=>array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'xs_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'xs_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'xs_auth_rule', //权限规则表
        'AUTH_USER' => 'xs_teacher'//用户信息表
    ),


    'BOOTSTRAP_URL'         =>  '/office/Home/Pub/bootstrap',
    'DIST_URL'              =>  '/office/Home/Pub/dist',
    'PLUGIN_URL'            =>  '/office/Home/Pub/plugins',

    'HOME_CSS_URL'          =>  '/office/Home/Pub/css',
    'HOME_JS_URL'           =>  '/office/Home/Pub/js',

    'SHOW_PAGE_TRACE'       =>  true,

    'SESSION_AUTO_START'    =>  true,//session调用自启

    'LOG_RECORD'            =>  true, // 开启日志记录
    'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR,WARN', // 只记录EMERG ALERT CRIT ERR 错误

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'office',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '649114390',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'xs_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
);