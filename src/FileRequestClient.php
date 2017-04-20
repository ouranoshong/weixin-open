<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 4/20/17
 * Time: 2:10 PM
 */

namespace Ouranos\WeChatOpen;


class FileRequestClient extends RequestClient
{

    public function execute(RequestInterface $request)
    {
        $params = $request->apiParameters();

        $params = array_merge($params, ['access_token' => (new NormalAccessTokenRequestClient($this->appId, $this->appSecret))->get()]);

        $uri = $this->api . $request->apiMethod() . '?'.http_build_query($params);

        $this->addDebugMessage('execute api: '.$uri);

        $this->addDebugMessage('post file: ', $params);

        return json_decode(curl_uploadFile($uri, $params));

    }

}
