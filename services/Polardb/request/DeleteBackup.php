<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
 */
final class DeleteBackup extends PolardbCommon
{
    public $action = 'DeleteBackup';
}
