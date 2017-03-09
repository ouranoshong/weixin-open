<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午8:55
 */

namespace Ouranos\WeChatOpen\Message;

/**
 *
 * file_put_contents(CACHE_FILE_DIR. '/notify', file_get_contents('php://input', 'r'));
 * $time = time();
 * echo <<<REPLY
 * <xml><ToUserName><![CDATA[oVavqvnF2F3Ii1csRC-zc2xwCdYI]]></ToUserName><FromUserName><![CDATA
 * [gh_9093028aa1e4]]></FromUserName><CreateTime>$time</CreateTime><MsgType><![CDATA[text
 * ]]></MsgType><Content><![CDATA[你好]]></Content></xml>
 * REPLY;
 *
 *
 * Class TextMessage
 *
 * @package Ouranos\WeChatOpen\Message
 */
class TextMessage implements MessageInterface
{
    use handleMessage;

    public $Content;

    public $MsgType = MessageInterface::TYPE_TEXT;
}
