<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午2:57
 */

namespace Ouranos\WeChatOpen;


/**
 * Class handleApiParameters
 *
 * @package Ouranos\WeChatOpen
 */
trait handleApiParameters
{
    public $params = [];

    public function parameterFormat() {
        return RequestInterface::PARAMS_FORMAT_ARRAY;
    }

    /**
     * @return array|string
     */
    public function apiParameters() {
        switch ($this->parameterFormat()) {
            case RequestInterface::PARAMS_FORMAT_ARRAY:
                return $this->params;
            case RequestInterface::PARAMS_FORMAT_JSON:
                return json_encode($this->params, JSON_UNESCAPED_UNICODE);
            default:
                return $this->params;
        }
    }
}
