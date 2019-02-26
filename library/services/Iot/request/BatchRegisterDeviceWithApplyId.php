<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setApplyId($ApplyId)
 * @method integer getApplyId()
 */
final class BatchRegisterDeviceWithApplyId extends IotCommon
{
    public $action = 'BatchRegisterDeviceWithApplyId';
}
