<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMac($Mac)
 * @method string getMac()
 * @method $this setSerialNo($SerialNo)
 * @method string getSerialNo()
 * @method $this setApgroupId($ApgroupId)
 * @method integer getApgroupId()
 */
final class AliyunRegisterApAsset extends CloudwfCommon
{
    public $action = 'AliyunRegisterApAsset';
}
