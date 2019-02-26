<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCallbackSwitch($CallbackSwitch)
 * @method string getCallbackSwitch()
 * @method $this setCallbackType($CallbackType)
 * @method string getCallbackType()
 * @method $this setCallbackURL($CallbackURL)
 * @method string getCallbackURL()
 * @method $this setEventTypeList($EventTypeList)
 * @method string getEventTypeList()
 * @method $this setAuthSwitch($AuthSwitch)
 * @method string getAuthSwitch()
 * @method $this setAuthKey($AuthKey)
 * @method string getAuthKey()
 * @method $this setResourceRealOwnerId($ResourceRealOwnerId)
 * @method integer getResourceRealOwnerId()
 * @method $this setMnsEndpoint($MnsEndpoint)
 * @method string getMnsEndpoint()
 * @method $this setMnsQueueName($MnsQueueName)
 * @method string getMnsQueueName()
 */
final class SetMessageCallback extends VodCommon
{
    public $action = 'SetMessageCallback';
}
