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
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setBody($Body)
 * @method string getBody()
 * @method $this setJobKey($JobKey)
 * @method string getJobKey()
 */
final class PushMessageToAndroid extends PushCommon
{
    public $action = 'PushMessageToAndroid';
}
