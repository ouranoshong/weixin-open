<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午3:00
 */

namespace Ouranos\WeChatOpen\NormalToken;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class TokenRequest implements RequestInterface
{
    use handleApiParameters;

    const GRANT_TYPE_CLIENT_CREDENTIAL = 'client_credential';

    public function __construct()
    {
        $this->params['grant_type'] = self::GRANT_TYPE_CLIENT_CREDENTIAL;
    }

    public function apiMethod()
    {
        return 'token';
    }

    public function setGrantType($value) {
         $this->params['grant_type'] = $value;
    }
}
