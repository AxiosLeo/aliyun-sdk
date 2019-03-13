<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setCount($Count)
 * @method integer getCount()
 */
final class BatchRegisterDevice extends IotCommon
{
    public $action = 'BatchRegisterDevice';
}
