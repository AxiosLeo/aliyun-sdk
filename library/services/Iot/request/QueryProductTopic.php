<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 */
final class QueryProductTopic extends IotCommon
{
    public $action = 'QueryProductTopic';
}
