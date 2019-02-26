<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setTarget($Target)
 * @method string getTarget()
 * @method $this setTargetValue($TargetValue)
 * @method string getTargetValue()
 * @method $this setApnsEnv($ApnsEnv)
 * @method string getApnsEnv()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setBody($Body)
 * @method string getBody()
 * @method $this setJobKey($JobKey)
 * @method string getJobKey()
 * @method $this setExtParameters($ExtParameters)
 * @method string getExtParameters()
 */
final class PushNoticeToiOS extends PushCommon
{
    public $action = 'PushNoticeToiOS';
}
