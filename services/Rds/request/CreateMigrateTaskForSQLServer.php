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
 * @method $this setTaskType($TaskType)
 * @method string getTaskType()
 * @method $this setIsOnlineDB($IsOnlineDB)
 * @method string getIsOnlineDB()
 * @method $this setOSSUrls($OSSUrls)
 * @method string getOSSUrls()
 */
final class CreateMigrateTaskForSQLServer extends RdsCommon
{
    public $action = 'CreateMigrateTaskForSQLServer';
}
