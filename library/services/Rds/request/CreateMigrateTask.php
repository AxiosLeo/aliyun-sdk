<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 * @method $this setBackupMode($BackupMode)
 * @method string getBackupMode()
 * @method $this setIsOnlineDB($IsOnlineDB)
 * @method string getIsOnlineDB()
 * @method $this setCheckDBMode($CheckDBMode)
 * @method string getCheckDBMode()
 * @method $this setOssObjectPositions($OssObjectPositions)
 * @method string getOssObjectPositions()
 * @method $this setOSSUrls($OSSUrls)
 * @method string getOSSUrls()
 * @method $this setMigrateTaskId($MigrateTaskId)
 * @method string getMigrateTaskId()
 */
final class CreateMigrateTask extends RdsCommon
{
    public $action = 'CreateMigrateTask';
}
