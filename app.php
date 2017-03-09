<?php


//echo "Hello WeiXin!";


//class WeChat
//{
//	private $token = 'HelloWorld';
//
//	public function valid()
//	{
//		$echostr = $_GET['echostr'];
//
//		if ($this->checkSignature()) {
//			echo $echostr;
//			exit;
//		}
//	}
//
//	private function checkSignature()
//	{
//		$signature = $_GET['signature'];
//		$timestamp = $_GET['timestamp'];
//		$nonce = $_GET['nonce'];
//
//		$tmpArr = [$this->token, $timestamp, $nonce];
//		sort($tmpArr, SORT_STRING);
//		$tmpStr = implode($tmpArr);
//
//		return ($signature === sha1($tmpStr));
//	}
//}


//$WeChat = new WeChat();
//$WeChat->valid();


//require __DIR__ . "/vendor/autoload.php";
//
//define("TEST_WX_APP_ID", "wx05bd512f34440595");
//define("TEST_WX_APP_SECRET", "0ff7a44ab3db2753edb4b47643baaaa6");

//$uri = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".TEST_WX_APP_ID."&secret=".TEST_WX_APP_SECRET;

//	$response = \Httpful\Request::get($uri)->send();

//	var_dump($response->body);
//
//
//var_dump($_SERVER);


require __DIR__ . "/config.php";


//Initialise the cURL var
$ch = curl_init();
//
////Get the response from cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
////Set the Url
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1');
//
////Create a POST array with the file in it
$postData = array(
    'media' => new CurlFile('app.php'),
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
//
//    // Execute the request
    $response = curl_exec($ch);

    var_dump($response);
