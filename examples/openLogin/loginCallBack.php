<?php 

require __DIR__ . '/config.wxopen.php';


$Client = new LoginClient();

$WeChat = $Client->weChatOpenLogin();

$response = $WeChat->getAccessInfo($_GET['code']);

$saveOpenId = function ($openId, $data) {
    $fileName =  md5($openId);

    file_put_contents(CACHE_FILE_DIR . '/'.$fileName, $data);
};

$saveUserInfo = function ($openId, $data) {

    $fileName = 'user-info-'.md5($openId);

    file_put_contents(CACHE_FILE_DIR . '/'.$fileName, $data);
};

if ($response->body && $response->body->access_token && $response->body->openid)
{
	
	if ($response->body->scope === \Ouranos\WeChatOpen\Login\WeChatOpenLogin::SCOPE_USER_INFO)
	{
		$responseUserInfo = $WeChat->getUserInfo(
			$response->body->access_token,
            $response->body->openid
		);

        $saveOpenId($response->body->openId, $response->raw_body);

        $saveUserInfo($response->body->openId, $responseUserInfo->raw_body);


        var_dump($responseUserInfo->body);

	} else {


        $saveOpenId($response->body->openId, $response->body);

        var_dump($response->body);

	}

} else {

	var_dump($response->body);
}
