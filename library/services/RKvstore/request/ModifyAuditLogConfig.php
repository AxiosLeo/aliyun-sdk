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
 * @method $this setRetention($Retention)
 * @method string getRetention()
 * @method $this setAuditCommand($AuditCommand)
 * @method string getAuditCommand()
 */
final class ModifyAuditLogConfig extends RKvstoreCommon
{
    public $action = 'ModifyAuditLogConfig';
}
