<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setProductName($ProductName)
 * @method string getProductName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class UpdateProduct extends IotCommon
{
    public $action = 'UpdateProduct';
}
