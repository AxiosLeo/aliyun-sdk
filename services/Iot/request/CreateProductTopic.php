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
 * @method $this setTopicShortName($TopicShortName)
 * @method string getTopicShortName()
 * @method $this setOperation($Operation)
 * @method string getOperation()
 * @method $this setDesc($Desc)
 * @method string getDesc()
 */
final class CreateProductTopic extends IotCommon
{
    public $action = 'CreateProductTopic';
}
