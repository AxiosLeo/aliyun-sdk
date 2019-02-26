<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setAuthTimeout($AuthTimeout)
 * @method integer getAuthTimeout()
 */
final class GetImageInfo extends VodCommon
{
    public $action = 'GetImageInfo';
}
