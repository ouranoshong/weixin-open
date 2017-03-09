<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午9:17
 */

namespace Ouranos\WeChatOpen\Message;


interface MessageInterface
{

    const TYPE_TEXT = 'text';
    const TYPE_IMAGE = 'image';
    const TYPE_VOICE = 'voice';
    const TYPE_VIDEO = 'video';
    const TYPE_SHORT_VIDEO = 'shortvideo';
    const TYPE_LOCATION = 'location';
    const TYPE_LIKE = 'link';
    const TYPE_NEW = 'news';
    const TYPE_MUSIC = 'music';

    public function loadFromXML($xml);

    public function toXML();
}
