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
 * @method $this setSecurityIps($SecurityIps)
 * @method string getSecurityIps()
 * @method $this setSecurityIpGroupName($SecurityIpGroupName)
 * @method string getSecurityIpGroupName()
 * @method $this setSecurityIpGroupAttribute($SecurityIpGroupAttribute)
 * @method string getSecurityIpGroupAttribute()
 * @method $this setModifyMode($ModifyMode)
 * @method string getModifyMode()
 */
final class ModifySecurityIps extends RKvstoreCommon
{
    public $action = 'ModifySecurityIps';
}
