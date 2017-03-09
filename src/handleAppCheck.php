<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:23
 */

namespace Ouranos\WeChatOpen;


/**
 * Class handleAppCheck
 *
 * @package Ouranos\WeChatOpen
 */
trait handleAppCheck
{
    protected function checkAppId()
    {
        if (!$this->appId) throw new \InvalidArgumentException("'appId' property in this class can not be null");
    }

    protected function checkAppSecret()
    {
        if (!$this->appSecret) throw new \InvalidArgumentException("'appSecret' property in this class can not be null");
    }
}
