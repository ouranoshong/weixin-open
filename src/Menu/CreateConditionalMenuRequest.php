<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午10:33
 */

namespace Ouranos\WeChatOpen\Menu;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class CreateConditionalMenuRequest implements RequestInterface
{
    use handleApiParameters;

    public function parameterFormat()
    {
        return RequestInterface::PARAMS_FORMAT_JSON;
    }

    public function apiMethod()
    {
        return 'menu/addconditional';
    }

    public function setButtons($value) {
        $this->params['button'] = $value;
        return $this;
    }

    public function addButton($value) {
        $this->params['button'][] = $value;
        return $this;
    }

    public function setGroupId($value) {
        $this->params['matchrule']['group_id'] = $value;
        return $this;
    }

    public function setSex($value) {
        $this->params['matchrule']['sex'] = $value;
        return $this;
    }

    public function setClientPlatformType($value) {
        $this->params['matchrule']['client_platform_type'] = $value;
        return $this;
    }

    public function setCountry($value) {
        $this->params['matchrule']['country'] = $value;
        return $this;
    }

    public function setProvince($value) {
        $this->params['matchrule']['province'] = $value;
        return $this;
    }

    public function setCity($value) {
        $this->params['matchrule']['city'] = $value;
        return $this;
    }
}
