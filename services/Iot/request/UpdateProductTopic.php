<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDesc($Desc)
 * @method string getDesc()
 * @method $this setOperation($Operation)
 * @method string getOperation()
 * @method $this setTopicShortName($TopicShortName)
 * @method string getTopicShortName()
 * @method $this setTopicId($TopicId)
 * @method string getTopicId()
 */
final class UpdateProductTopic extends IotCommon
{
    public $action = 'UpdateProductTopic';
}
