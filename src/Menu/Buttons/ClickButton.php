<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午5:54
 */

namespace Ouranos\WeChatOpen\Menu\Buttons;


use Ouranos\WeChatOpen\Menu\ButtonInterface;

class ClickButton implements ButtonInterface
{
     use handleButton;

     public $type = ButtonInterface::TYPE_CLICK;

     public $key;

     public function setValue($name, $value)
     {
         $this->name = $name;
         $this->key = $value;
     }
}
