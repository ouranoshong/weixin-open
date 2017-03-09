<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午5:58
 */

namespace Ouranos\WeChatOpen\Menu\Buttons;


use Ouranos\WeChatOpen\Menu\ButtonInterface;

trait handleButton
{
    public $name;
    public $type;
    public $sub_button;

    public function addSubButton(ButtonInterface $button) {
            $this->sub_button[] = $button->toArray();
    }

    public function toArray() {
        $button = (array) $this;
        if (key_exists('sub_button', $button) &&
            (empty($button['sub_button']) || is_null($button['sub_button']))) {
            unset($button['sub_button']);
        }
        return $button;
    }
}
