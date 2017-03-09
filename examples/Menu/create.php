<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午5:05
 */

require __DIR__ . '/../../config.php';

$Client = new \Ouranos\WeChatOpen\RequestClient();

$request = new \Ouranos\WeChatOpen\Menu\CreateMenuRequest();

$button = new \Ouranos\WeChatOpen\Menu\Buttons\ViewButton();
$button->setValue('我的资料', 'http://7f033b15.ittun.com/user/profile');
$request->addButton($button->toArray());

var_dump($Client->execute($request));
