<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-28
 * Time: 下午11:30
 */

namespace Ouranos\WeChatOpen\Media;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class GetMediaRequest implements RequestInterface
{
     use handleApiParameters;

     public function apiMethod()
     {
         return 'media/get';
     }

     public function setMediaId($value)
     {
         $this->params['media_id'] = $value;
         return $this;
     }
}
