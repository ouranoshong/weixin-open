<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午11:29
 */

namespace Ouranos\WeChatOpen\EventMessage;


class UnSubscribeEventMessage extends SubscribeEventMessage
{
     public $Event = EventMessageInterface::EVENT_TYPE_UNSUBSCRIBE;
}
