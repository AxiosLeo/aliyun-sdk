<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setQos($Qos)
 * @method integer getQos()
 * @method $this setTopicFullName($TopicFullName)
 * @method string getTopicFullName()
 * @method $this setMessageContent($MessageContent)
 * @method string getMessageContent()
 */
final class Pub extends IotCommon
{
    public $action = 'Pub';
}
