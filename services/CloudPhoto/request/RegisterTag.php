<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setTagKey($TagKey)
 * @method string getTagKey()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setText($Text)
 * @method string getText()
 */
final class RegisterTag extends CloudPhotoCommon
{
    public $action = 'RegisterTag';
}
