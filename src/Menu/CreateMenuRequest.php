<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午4:02
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class CreateMenuRequest implements RequestInterface
{
    use handleApiParameters;

    public function parameterFormat()
    {
        return RequestInterface::PARAMS_FORMAT_JSON;
    }

    public function apiMethod()
    {
        return 'menu/create';
    }

    public function addButton($value) {
        $this->params['button'][] = $value;
        return $this;
    }
}
