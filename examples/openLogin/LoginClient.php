x<?php

class LoginClient
{
	public function weChatOpenLogin()
	{
		$WeChat = new \Ouranos\WeChatOpen\Login\WeChatOpenLogin();

		$WeChat->appId = TEST_WX_APP_ID;
		$WeChat->appSecret = TEST_WX_APP_SECRET;
		$WeChat->scope = \Ouranos\WeChatOpen\Login\WeChatOpenLogin::SCOPE_USER_INFO;

		$WeChat->redirectUri = $_SERVER['REQUEST_SCHEME']. '://'. $_SERVER['HTTP_HOST'].'/examples/openLogin/loginCallBack.php';

		return $WeChat;	
	}
}
