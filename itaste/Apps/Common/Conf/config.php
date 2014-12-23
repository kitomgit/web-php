<?php
return array(
	//'配置项'=>'配置值'
		'TMPL_PARSE_STRING'=>array(//模板解析
				'__PCSS__'=> __ROOT__. '/Public/css',
				'__PJS__'  => __ROOT__. '/Public/js',
				'__PIMAGES__' =>__ROOT__. '/Public/images'
		),
		//数据库配置信息
		'DB_TYPE'   => 'mysql', // 数据库类型
		'DB_HOST'   => 'localhost', // 服务器地址
		'DB_NAME'   => 'thinkphp', // 数据库名
		'DB_USER'   => 'root', // 用户名
		'DB_PWD'    => '', // 密码
		'DB_PORT'   => 3306, // 端口
		'DB_PREFIX' => 'tp_', // 数据库表前缀
		'DB_CHARSET'=> 'utf8', // 字符集
		'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
		//变量输出标签
		'TMPL_L_DELIM'=>'<{',
		'TMPL_R_DELIM'=>'}>'
);