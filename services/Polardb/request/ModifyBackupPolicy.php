<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setPreferredBackupTime($PreferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setPreferredBackupPeriod($PreferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
 * @method $this setBackupRetentionPeriod($BackupRetentionPeriod)
 * @method string getBackupRetentionPeriod()
 */
final class ModifyBackupPolicy extends PolardbCommon
{
    public $action = 'ModifyBackupPolicy';
}
