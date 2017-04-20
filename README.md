# weixin-open
A sdk for wei xin open platform

### Includes

* NormalAccessToken
* Third-party login
* Media
* Event / Event Message Libs
* Message
* Menu

### Usage

#### Get Access Token

* Make normal access token request (`\Ouranos\WeChatOpen\NormalToken\TokenRequest`) then execute by `\Ouranos\WeChatOpen\RequestClient`

```php
$Client = new \Ouranos\WeChatOpen\RequestClient('appid', 'appSecret');

$Request = new \Ouranos\WeChatOpen\NormalToken\TokenRequest();

$response = $Client->execute($Request);
```

* Use access token client to fetch and save access token in a file, then each api request load an access token from the cache file.

```php
$token = new \Ouranos\WeChatOpen\NormalAccessTokenRequestClient(APP_ID, APP_SECRET);

echo $token->fetchAndSave().PHP_EOL;

echo $token->get().PHP_EOL;
```
