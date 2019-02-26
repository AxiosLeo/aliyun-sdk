<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSid($Sid)
 * @method integer getSid()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDids($Dids)
 * @method string getDids()
 */
final class AreaCreate extends CloudwfCommon
{
    public $action = 'AreaCreate';
}
