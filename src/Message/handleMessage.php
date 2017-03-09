<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午9:33
 */

namespace Ouranos\WeChatOpen\Message;


use Ouranos\WeChatOpen\handleLoadFromXML;

/**
 * Class handleMessage
 *
 * @package Ouranos\WeChatOpen\Message
 */
trait handleMessage
{
    use handleLoadFromXML;
    /**
     * @var
     */
    public $ToUserName;
    /**
     * @var
     */
    public $FromUserName;
    /**
     * @var
     */
    public $CreateTime;
    /**
     * @var
     */
    public $MsgType;
    /**
     * @var
     */
    public $MsgId;

    /**
     * @return string
     */
    public function toXML()
    {
         $notCdatas = ['CreateTime', 'MsgId'];

         if (!$this->CreateTime) $this->CreateTime = time();

         $children = '';

         foreach($this as $key => $value) {
             if ($value === null) continue;

             if (in_array($key, $notCdatas, true)) {
                 $children .= "<$key>$value</$key>";
             } else {
                 $children .= "<$key><![CDATA[$value]]></$key>";
             }
         }

         if ($children) {
             return "<xml>$children</xml>";
         }

         return '';
    }

}
