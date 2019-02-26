<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFilter($Filter)
 * @method string getFilter()
 * @method $this setRoleType($RoleType)
 * @method string getRoleType()
 */
final class ModifyAuditLogFilter extends DdsCommon
{
    public $action = 'ModifyAuditLogFilter';
}
