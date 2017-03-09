<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:16
 */

require __DIR__ . '/../../config.php';


$Client = new \Ouranos\WeChatOpen\RequestClient();

$Request = new \Ouranos\WeChatOpen\NormalToken\TokenRequest();

$response = $Client->execute($Request);

var_dump($response);
