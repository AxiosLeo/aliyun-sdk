<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSourceDBInstanceId($SourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDBInfo($DBInfo)
 * @method string getDBInfo()
 */
final class ImportDatabaseBetweenInstances extends RdsCommon
{
    public $action = 'ImportDatabaseBetweenInstances';
}
