<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 */
final class ListProductTags extends IotCommon
{
    public $action = 'ListProductTags';
}
