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
 * @method $this setMinorversion($Minorversion)
 * @method string getMinorversion()
 * @method $this setEffectTime($EffectTime)
 * @method string getEffectTime()
 */
final class ModifyInstanceMinorVersion extends RKvstoreCommon
{
    public $action = 'ModifyInstanceMinorVersion';
}
