<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:50
 */

require __DIR__ . '/../../config.php';


$Token = new \Ouranos\WeChatOpen\NormalAccessTokenRequestClient(APP_ID, APP_SECRET);

var_dump($Token->get());
