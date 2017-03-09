<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-28
 * Time: 下午10:50
 */

namespace Ouranos\WeChatOpen\Media;


use Ouranos\WeChatOpen\handleApiParameters;
use Ouranos\WeChatOpen\RequestInterface;

class UploadMediaRequest implements RequestInterface
{
    use handleApiParameters;

    const FILE_TYPE_IMAGE = 'image';
    const FILE_TYPE_VOICE = 'voice';
    const FILE_TYPE_VIDEO = 'video';
    const FILE_TYPE_THUMB = 'thumb';


    public function apiMethod()
    {
        return 'media/upload';
    }

    public function parameterFormat()
    {
        return RequestInterface::PARAMS_FORMAT_FILE;
    }

    public function setType($value) {
        $this->params['type'] = $value;
    }

    public function setMedia($value)
    {
        $this->params['media'] = $value;
        return $this;
    }

}
