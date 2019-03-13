<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setMajorVersion($MajorVersion)
 * @method string getMajorVersion()
 * @method $this setEffectTime($EffectTime)
 * @method string getEffectTime()
 */
final class ModifyInstanceMajorVersion extends RKvstoreCommon
{
    public $action = 'ModifyInstanceMajorVersion';
}
