<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setIid($Iid)
 * @method integer getIid()
 */
final class UserDataDelete extends CloudwfCommon
{
    public $action = 'UserDataDelete';
}
