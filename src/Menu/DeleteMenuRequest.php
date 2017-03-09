<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午8:56
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class DeleteMenuRequest implements RequestInterface
{
     use handleApiParameters;

    public function apiMethod()
    {
        return 'menu/delete';
    }

}
