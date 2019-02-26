<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTopicId($TopicId)
 * @method string getTopicId()
 */
final class DeleteProductTopic extends IotCommon
{
    public $action = 'DeleteProductTopic';
}
