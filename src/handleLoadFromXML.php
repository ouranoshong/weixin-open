<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午11:08
 */

namespace Ouranos\WeChatOpen;


trait handleLoadFromXML
{
    /**
     * @param $xml
     */
    public function loadFromXML($xml)
    {
        $data = simplexml_load_string($xml, null, LIBXML_NOCDATA);

        foreach($data as $key => $value) {
            if (key_exists($key, (array)$this)) $this->{$key} = $value;
        }
    }
}
