<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLang($Lang)
 * @method array getLang()
 */
final class ListRegisteredTags extends CloudPhotoCommon
{
    public $action = 'ListRegisteredTags';
}
