<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午10:44
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class DeleteConditionalMenuRequest implements RequestInterface
{
    use handleApiParameters;

    public function apiMethod()
    {
        return 'menu/delconditional';
    }

    public function parameterFormat()
    {
        return RequestInterface::PARAMS_FORMAT_JSON;
    }

    public function setMenuId($value) {
        $this->params['menuid'] = $value;
        return $this;
    }
}
