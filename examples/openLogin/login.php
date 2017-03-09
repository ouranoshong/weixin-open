<?php

//require __DIR__ . '/vender/autoloader.php';
require __DIR__ . '/config.wxopen.php';

$WeChat = new \Ouranos\WeChatOpen\Login\WeChatOpenLogin();

$Client = new LoginClient();
$WeChat = $Client->weChatOpenLogin();

$WeChat->openUserAccessCodePage();
