<?php
return [
    //数据库配置
    'db'=>[
        'host'=>'127.0.0.1',
        'dbname'=>'',
        'user'=>'',
        'password'=>'',
        'charset'=>'utf8'
    ],
    'redis'=>[
        'scheme'=>'tcp',
        'host'=>'127.0.0.1',
        'port'=>6379
    ],
    //高德地图webKey（用于获取定位信息）
    'map-key'=>'',
    //盐（用于加密）
    'encryption_value'=>'',
    //邀请码明文()
    'encryption_key'=>'',
    //加盐邀请码(请自行生成，然后保存于此)
    'encryption_value_code'=>'',
    //网站域名(现已无实际用途)
    'domain'=>'http://photo.treelo.xin/',
    //二级路由小心心  windows：'💕' liunx:'%F0%9F%92%95'
    'ext-hart'=>'💕'
];