<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午11:15
 */

namespace Ouranos\WeChatOpen\EventMessage;


class SubscribeEventMessage implements EventMessageInterface
{
    use handleEventMessage;

    public $Event = EventMessageInterface::EVENT_TYPE_SUBSCRIBE;
}
