<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午11:05
 */

namespace Ouranos\WeChatOpen\EventMessage;


use Ouranos\WeChatOpen\handleLoadFromXML;

trait handleEventMessage
{
    use handleLoadFromXML;

    public $ToUserName;
    public $FromUserName;
    public $CreateTime;
    public $MsgType = EventMessageInterface::MSG_TYPE;
    public $Event;
    public $EventKey;

}
