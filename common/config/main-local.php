<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=47.106.247.222;dbname=shop_zijiehaowu_',
            'username' => 'shop_zijiehaowu_',
            'password' => 'YKj8hckCb3xJzWwi',
            'charset' => 'utf8',
            'tablePrefix' => 'dlc_',   //加入前缀名称fc_
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
