<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午1:22
 */

require __DIR__ . '/../../config.php';

$client = new \Ouranos\WeChatOpen\RequestClient();

$request = new \Ouranos\WeChatOpen\Menu\DeleteConditionalMenuRequest();

$request->setMenuId('412531451');

var_dump($client->execute($request));
