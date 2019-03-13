<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setProducerId($ProducerId)
 * @method string getProducerId()
 * @method $this setAccessPoint($AccessPoint)
 * @method string getAccessPoint()
 * @method $this setTopic($Topic)
 * @method string getTopic()
 * @method $this setSubscriptions($Subscriptions)
 * @method array getSubscriptions()
 */
final class ModifyNotificationConfig extends CCCCommon
{
    public $action = 'ModifyNotificationConfig';
}
