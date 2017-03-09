<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午1:04
 */

require __DIR__ . '/../../config.php';

$client = new \Ouranos\WeChatOpen\RequestClient();

$request = new \Ouranos\WeChatOpen\Menu\CreateConditionalMenuRequest();

$request->setButtons(
    [
        [
            'name'=> '廣州登錄', 'type' => 'view', 'url'=> 'http://6e2eb0ed.ittun.com/examples/openLogin/login.php'
        ]
    ]
    )->setCountry('中国')
    ->setProvince('广东')
    ->setCity('广州');


var_dump($client->execute($request));
