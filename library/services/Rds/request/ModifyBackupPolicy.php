<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupPolicyMode($BackupPolicyMode)
 * @method string getBackupPolicyMode()
 * @method $this setPreferredBackupTime($PreferredBackupTime)
 * @method string getPreferredBackupTime()
 * @method $this setPreferredBackupPeriod($PreferredBackupPeriod)
 * @method string getPreferredBackupPeriod()
 * @method $this setBackupRetentionPeriod($BackupRetentionPeriod)
 * @method string getBackupRetentionPeriod()
 * @method $this setBackupLog($BackupLog)
 * @method string getBackupLog()
 * @method $this setLogBackupRetentionPeriod($LogBackupRetentionPeriod)
 * @method string getLogBackupRetentionPeriod()
 * @method $this setEnableBackupLog($EnableBackupLog)
 * @method string getEnableBackupLog()
 * @method $this setLocalLogRetentionHours($LocalLogRetentionHours)
 * @method string getLocalLogRetentionHours()
 * @method $this setLocalLogRetentionSpace($LocalLogRetentionSpace)
 * @method string getLocalLogRetentionSpace()
 * @method $this setHighSpaceUsageProtection($HighSpaceUsageProtection)
 * @method string getHighSpaceUsageProtection()
 * @method $this setDuplication($Duplication)
 * @method string getDuplication()
 * @method $this setDuplicationContent($DuplicationContent)
 * @method string getDuplicationContent()
 * @method $this setDuplicationLocation($DuplicationLocation)
 * @method string getDuplicationLocation()
 * @method $this setLogBackupFrequency($LogBackupFrequency)
 * @method string getLogBackupFrequency()
 */
final class ModifyBackupPolicy extends RdsCommon
{
    public $action = 'ModifyBackupPolicy';
}
