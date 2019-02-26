<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBindId($BindId)
 * @method integer getBindId()
 * @method $this setConfigType($ConfigType)
 * @method integer getConfigType()
 */
final class GetApPortalBind extends CloudwfCommon
{
    public $action = 'GetApPortalBind';
}
