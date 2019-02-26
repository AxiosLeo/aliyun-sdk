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
 * @method $this setAuditStatus($AuditStatus)
 * @method string getAuditStatus()
 * @method $this setStoragePeriod($StoragePeriod)
 * @method integer getStoragePeriod()
 */
final class ModifyAuditPolicy extends DdsCommon
{
    public $action = 'ModifyAuditPolicy';
}
