<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午2:47
 */

namespace Ouranos\WeChatOpen;
use Ouranos\WeChatOpen\NormalToken\TokenRequest;

class RequestClient
{
    use handleAppCheck, handleLogger;

    public $api = 'https://api.weixin.qq.com/cgi-bin/';

    protected $appId = '';

    protected $appSecret = '';

    public function __construct($appId, $appSecret)
    {
        $this->appId = $appId;
        $this->appSecret;
    }

    public function execute(RequestInterface $request) {

        $params = $request->apiParameters();

        if ($request->parameterFormat() === RequestInterface::PARAMS_FORMAT_JSON) {
            $data = $params;
            $params = [];
        } else if ($request->parameterFormat() === RequestInterface::PARAMS_FORMAT_FILE) {
            $data = $params;
        } else {
            $data = '';
        }

        if ($request instanceof TokenRequest) {
            $this->checkAppId();
            $this->checkAppSecret();
            $params['appid'] = $this->appId;
            $params['secret'] = $this->appSecret;

        } else {
            $token = $this->getNormalToken();
            $params = array_merge($params, ['access_token' => $token->access_token]);
        }

        $uri = $this->api . $request->apiMethod() . '?'.http_build_query($params);

        $this->addDebugMessage('execute api: '.$uri);

        if ($this->isPostParams($request)) {

            switch ($request->parameterFormat()) {
                case RequestInterface::PARAMS_FORMAT_FILE:
                    $this->addDebugMessage('post file: ', $data);
                    return json_decode(curl_uploadFile($uri, $data));
                case RequestInterface::PARAMS_FORMAT_JSON:
                    $this->addDebugMessage('post json', $data);
                    return json_decode(curl_post($uri, $data));
            }

        }

        return json_decode(curl_get($uri));
    }

    protected function tokenCacheFileName() {
        return sys_get_temp_dir() . '/wxAccessToken';
    }

    public function getNormalToken(){

        $tokenFile = $this->tokenCacheFileName();

        if (is_file($tokenFile)) {
            return json_decode(file_get_contents($tokenFile));
        }

        return '';
    }

    public function fetchAndSaveNormalToken() {
        $tokenFile = $this->tokenCacheFileName();
        $response = $this->execute(new TokenRequest());
        file_put_contents($tokenFile, json_encode($response));
        return $response;
    }

    protected function isPostParams(RequestInterface $request)
    {
        return in_array($request->parameterFormat(),
                [RequestInterface::PARAMS_FORMAT_JSON,
                    RequestInterface::PARAMS_FORMAT_FILE
                ]);
    }
}
