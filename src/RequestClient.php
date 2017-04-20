<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午2:47
 */

namespace Ouranos\WeChatOpen;

class RequestClient
{
    use handleAppCheck, handleLogger;

    public $api = 'https://api.weixin.qq.com/cgi-bin/';

    protected $appId = '';

    protected $appSecret = '';

    public function __construct($appId, $appSecret)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
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

        $params = array_merge($params, ['access_token' => (new NormalAccessTokenRequestClient($this->appId, $this->appSecret))->get()]);

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

    protected function isPostParams(RequestInterface $request)
    {
        return in_array($request->parameterFormat(),
                [RequestInterface::PARAMS_FORMAT_JSON,
                    RequestInterface::PARAMS_FORMAT_FILE
                ]);
    }
}
