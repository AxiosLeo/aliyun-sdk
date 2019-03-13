<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFileName($FileName)
 * @method string getFileName()
 */
final class ImportDataForSQLServer extends RdsCommon
{
    public $action = 'ImportDataForSQLServer';
}
