<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午8:52
 */

require __DIR__ . '/../../config.php';

$Client = new \Ouranos\WeChatOpen\RequestClient();
$request = new \Ouranos\WeChatOpen\Menu\GetMenuRequest();

var_dump($Client->execute($request));
