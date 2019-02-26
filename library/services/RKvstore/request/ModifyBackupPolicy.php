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
 * @method $this setPreferredBackupTime($PreferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setPreferredBackupPeriod($PreferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
 */
final class ModifyBackupPolicy extends RKvstoreCommon
{
    public $action = 'ModifyBackupPolicy';
}
