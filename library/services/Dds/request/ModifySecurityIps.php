<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityIps($SecurityIps)
 * @method string getSecurityIps()
 * @method $this setModifyMode($ModifyMode)
 * @method string getModifyMode()
 * @method $this setSecurityIpGroupName($SecurityIpGroupName)
 * @method string getSecurityIpGroupName()
 * @method $this setSecurityIpGroupAttribute($SecurityIpGroupAttribute)
 * @method string getSecurityIpGroupAttribute()
 */
final class ModifySecurityIps extends DdsCommon
{
    public $action = 'ModifySecurityIps';
}
