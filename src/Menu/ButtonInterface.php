<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-26
 * Time: 下午5:02
 */

namespace Ouranos\WeChatOpen\Menu;


interface ButtonInterface
{
    const TYPE_CLICK = 'click';
    const TYPE_VIEW = 'view';
    const TYPE_SCAN_CODE_PUSH = 'scancode_push';
    const TYPE_SCAN_WAIT_MSG = 'scancode_waitmsg';
    const TYPE_PIC_SYS_PHOTO = 'pic_sysphoto';
    const TYPE_PIC_PHOTO_OR_ALBUM = 'pic_photo_or_album';
    const TYPE_PIC_WEI_XIN = 'pic_weixin';
    const TYPE_LOCATION_SELECT = 'location_select';
    const TYPE_MEDIA_ID = 'media_id';
    const TYPE_VIEW_LIMITED = 'view_limited';

    public function setValue($name, $value);

    public function addSubButton(ButtonInterface $button);

    public function toArray();
}
