<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午2:54
 */

require __DIR__ . '/../../config.php';

$client = new \Ouranos\WeChatOpen\RequestClient(APP_ID, APP_SECRET);

$request = new \Ouranos\WeChatOpen\Menu\TryMatchMenuRequest();

$request->setUserId('oVavqvnF2F3Ii1csRC-zc2xwCdYI');

var_dump($client->execute($request));
