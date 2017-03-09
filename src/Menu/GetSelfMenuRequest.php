<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午10:20
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class GetSelfMenuRequest implements RequestInterface
{
    use handleApiParameters;

    public function apiMethod()
    {
        return 'get_current_selfmenu_info';
    }
}
