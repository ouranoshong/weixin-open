<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午11:00
 */

namespace Ouranos\WeChatOpen\EventMessage;


interface EventMessageInterface
{
    const MSG_TYPE = 'event';

    const EVENT_TYPE_SUBSCRIBE = 'subscribe';
    const EVENT_TYPE_UNSUBSCRIBE = 'unsubscribe';

    const EVENT_TYPE_CLICK = 'click';

    public function loadFromXML($xml);
}
