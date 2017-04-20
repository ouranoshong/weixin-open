<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-28
 * Time: 下午11:34
 */

//TIQOXyN02IrUM1LDZ16c-JHMY7is9HkkJHcdf8H57KzmGb9HksSlG_LKAECAcnkC

require __DIR__ . '/../../config.php';

$client = new \Ouranos\WeChatOpen\RequestClient(APP_ID, APP_SECRET);

$request = new \Ouranos\WeChatOpen\Media\GetMediaRequest();
$request->setMediaId('Po_B-gzDm67Zavf52NchO_cPFZlKiiyoia7WCQ0Lw6SVW7AZRqo3bG-w4otwaPm4');

var_dump($client->execute($request));
