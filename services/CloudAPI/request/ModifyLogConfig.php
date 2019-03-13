<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSlsProject($SlsProject)
 * @method string getSlsProject()
 * @method $this setSlsLogStore($SlsLogStore)
 * @method string getSlsLogStore()
 * @method $this setLogType($LogType)
 * @method string getLogType()
 */
final class ModifyLogConfig extends CloudAPICommon
{
    public $action = 'ModifyLogConfig';
}
