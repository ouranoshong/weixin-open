<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午11:31
 */

namespace Ouranos\WeChatOpen\EventMessage;


class MenuClickEventMessage implements EventMessageInterface
{
     use handleEventMessage;

     public $Event = EventMessageInterface::EVENT_TYPE_CLICK;
}
