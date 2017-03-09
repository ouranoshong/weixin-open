<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午5:24
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class GetMenuRequest implements RequestInterface
{
    use handleApiParameters;

    public function apiMethod()
    {
        return 'menu/get';
    }
}
