<?php

namespace Ouranos\WeChatOpen\Login;

use Httpful\Request;
use Monolog\Logger;
use Ouranos\WeChatOpen\handleAppCheck;

class WeChatOpenLogin
{
    use handleAppCheck;

    const SCOPE_BASE = 'snsapi_base';

    const SCOPE_USER_INFO = 'snsapi_userinfo';

    public $appId;

    public $appSecret;

    public $scope = '';

    public $redirectUri = '';

    const COOKIE_STATE_NAME = 'WeChatOpenState';

    /**
     * @var Logger
     */
    protected $logger;

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    protected function addDebugMessage($message)
    {
        if ($this->logger) {
            $this->logger->debug($message);
        }
    }

    protected function addInfoMessage($message)
    {
        if ($this->logger) {
            $this->logger->info($message);
        }
    }

    protected function addErrorMessage($message)
    {
        if ($this->logger) {
            $this->logger->error($message);
        }
    }

    public function generateState()
    {
        return md5(time() . rand());
    }


    public function openUserAccessCodePage($redirectUri = '', $scope = '', $options = [])
    {
        $this->checkAppId();

        $state = $this->generateState();

        if (!$redirectUri) {
            $redirectUri = $this->redirectUri;
        }

        if (!$scope) {
            $scope = $this->scope;
        }

        $redirectUri = urlencode($redirectUri);

        $openUrl = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$this->appId}&redirect_uri={$redirectUri}&response_type=code&scope={$scope}&state={$state}#wechat_redirect";

        if (isset($options["stateValue"]) && ($stateValue = $options["stateValue"])) {
            setcookie(self::COOKIE_STATE_NAME, $state);
            setcookie($state, $stateValue);

            $this->addDebugMessage('set state cookie' . var_export($stateValue, true));

        }

        if ($this->logger) {
            $this->logger->debug('Open url: ' . $openUrl);
        }

        echo <<<HTML
<script type="text/javascript">
	window.location.href = "{$openUrl}";
</script>
HTML;
    }


    public function getAccessInfo($userAccessCode)
    {
        $this->checkAppId();
        $this->checkAppSecret();

        $accessTokenApi = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$this->appId}&secret={$this->appSecret}&code={$userAccessCode}&grant_type=authorization_code";

        $this->addDebugMessage('Get access api: ' . $accessTokenApi);

        return Request::get($accessTokenApi)->expectsJson()->send();
    }

    public function getUserInfo($token, $openId)
    {
        $userInfoApi = "https://api.weixin.qq.com/sns/userinfo?access_token={$token}&openid={$openId}&lang=zh_CN";

        $this->addDebugMessage('Get user info api: ' . $userInfoApi);

        return Request::get($userInfoApi)->expectsJson()->send();
    }

    public function getStateValueFromCookie()
    {

        if (!isset($_COOKIE[self::COOKIE_STATE_NAME])) return null;

        if ($state = $_COOKIE[self::COOKIE_STATE_NAME]) {
            return isset($_COOKIE[$state]) ? $_COOKIE[$state] : null;
        }

        return null;
    }
}
