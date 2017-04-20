<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 4/20/17
 * Time: 11:21 AM
 */

namespace Ouranos\WeChatOpen;


use Ouranos\WeChatOpen\NormalToken\TokenRequest;

class NormalAccessTokenRequestClient extends RequestClient
{
    protected function tokenCacheFileName() {
        return sys_get_temp_dir() . '/wxAccessToken-'.md5($this->appSecret.$this->appId.$this->appSecret);
    }

    public function get(){

        $tokenFile = $this->tokenCacheFileName();

        if (is_file($tokenFile) && ($token = json_decode(file_get_contents($tokenFile)))) {
            return $token->access_token;
        }

        return '';
    }

    public function fetchAndSave() {
        $tokenFile = $this->tokenCacheFileName();
        $response = $this->execute(new TokenRequest());
        file_put_contents($tokenFile, $response);
        return $response;
    }

    public function execute(RequestInterface $request)
    {
        if ($request instanceof TokenRequest) {
            $params = $request->apiParameters();
            $params['appid'] = $this->appId;
            $params['secret'] = $this->appSecret;
            $uri = $this->api . $request->apiMethod() . '?'.http_build_query($params);
            return curl_post($uri);
        } else {
            throw new \RuntimeException('input argument must be instance of NormalToken\TokenRequest!');
        }
    }
}
