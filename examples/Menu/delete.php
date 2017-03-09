<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午9:00
 */

require __DIR__ . '/../../config.php';

$client = new \Ouranos\WeChatOpen\RequestClient();

$request = new \Ouranos\WeChatOpen\Menu\DeleteMenuRequest();

var_dump($client->execute($request));
