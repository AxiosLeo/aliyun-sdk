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
 * @method $this setProductTag($ProductTag)
 * @method array getProductTag()
 */
final class CreateProductTags extends IotCommon
{
    public $action = 'CreateProductTags';
}
