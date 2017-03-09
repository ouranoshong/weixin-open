<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午10:54
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class TryMatchMenuRequest implements RequestInterface
{
    use handleApiParameters;

    public function apiMethod()
    {
        return 'menu/trymatch';
    }

    public function parameterFormat()
    {
        return RequestInterface::PARAMS_FORMAT_JSON;
    }


    public function setUserId($value)
    {
        $this->params['user_id'] = $value;

        return $this;
    }
}
