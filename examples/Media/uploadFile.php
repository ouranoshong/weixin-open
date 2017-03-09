<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-28
 * Time: 下午11:02
 */

require __DIR__ . '/../../config.php';

$Client = new \Ouranos\WeChatOpen\RequestClient();

$request = new \Ouranos\WeChatOpen\Media\UploadMediaRequest();

$request->setMedia(__DIR__ . '/example.jpg');
$request->setType(\Ouranos\WeChatOpen\Media\UploadMediaRequest::FILE_TYPE_IMAGE);

var_dump($Client->execute($request));
