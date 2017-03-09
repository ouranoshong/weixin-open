<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:25
 */

namespace Ouranos\WeChatOpen;
use Monolog\Logger;

/**
 * Class handleLogger
 *
 * @package Ouranos\WeChatOpen
 * @property $logger Logger
 */
trait handleLogger
{
    /**
     * @var Logger
     */
    protected $logger;

    protected function setLogger($logger)
    {
        $this->logger = $logger;
    }

    protected function addDebugMessage($message){
        if ($this->logger) {
            $this->logger->debug($message);
        }
    }
}
