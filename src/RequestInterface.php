<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-25
 * Time: 下午2:50
 */

namespace Ouranos\WeChatOpen;


interface RequestInterface
{
    const PARAMS_FORMAT_JSON = 'json';
    const PARAMS_FORMAT_ARRAY = 'array';
    const PARAMS_FORMAT_FILE = 'file';

    public function apiMethod();

    public function apiParameters();

    public function parameterFormat();
}
