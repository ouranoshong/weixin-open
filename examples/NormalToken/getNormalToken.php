<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:16
 */

require __DIR__ . '/../../config.php';


$token = new \Ouranos\WeChatOpen\NormalAccessTokenRequestClient(APP_ID, APP_SECRET);

echo $token->fetchAndSave().PHP_EOL;
