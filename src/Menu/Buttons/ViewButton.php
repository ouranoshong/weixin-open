<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午6:08
 */

namespace Ouranos\WeChatOpen\Menu\Buttons;


use Ouranos\WeChatOpen\Menu\ButtonInterface;

class ViewButton implements ButtonInterface
{
      use handleButton;

      public $url;

      public $type = ButtonInterface::TYPE_VIEW;

      public function setValue($name, $value)
      {
          $this->name = $name;
          $this->url = $value;
      }
}
