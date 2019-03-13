<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 */
final class UpdateMediaCover extends MtsCommon
{
    public $action = 'UpdateMediaCover';
}
