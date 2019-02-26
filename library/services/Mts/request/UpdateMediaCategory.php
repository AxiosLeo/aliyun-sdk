<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 */
final class UpdateMediaCategory extends MtsCommon
{
    public $action = 'UpdateMediaCategory';
}
