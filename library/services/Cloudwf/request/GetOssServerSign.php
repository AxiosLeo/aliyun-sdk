<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDirType($DirType)
 * @method integer getDirType()
 */
final class GetOssServerSign extends CloudwfCommon
{
    public $action = 'GetOssServerSign';
}
