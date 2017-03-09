<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:50
 */

require __DIR__ . '/../../config.php';


$Client = new \Ouranos\WeChatOpen\RequestClient();

$tokenInfo = $Client->getNormalToken();

var_dump($tokenInfo);
