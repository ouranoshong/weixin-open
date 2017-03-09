<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-28
 * Time: 下午10:28
 */

namespace Ouranos\WeChatOpen;

/**
 * @param       $url
 * @param array $files
 *
 * @return mixed
 */
function curl_uploadFile($url, $files = []) {

    $files = array_filter(array_map(function($file) {
        if (is_file($file)) {
            return new \CURLFile($file);
        }
    }, $files));

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // post数据
    curl_setopt($ch, CURLOPT_POST, 1);
    // post的变量
    curl_setopt($ch, CURLOPT_POSTFIELDS, $files);
    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
}

/**
 * @param       $url
 * @param array $data
 *
 * @return mixed
 */
function curl_post($url, $data = []) {

    if ($data && is_array($data)) {
        $data = http_build_query($data);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // post数据
    curl_setopt($ch, CURLOPT_POST, 1);
    // post的变量
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
}

/**
 * @param $url
 *
 * @return mixed
 */
function curl_get($url) {
    $ch = curl_init();

    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);

    return $output;
}
