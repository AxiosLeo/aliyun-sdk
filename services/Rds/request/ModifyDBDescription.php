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
 * @method $this setDBDescription($DBDescription)
 * @method string getDBDescription()
 */
final class ModifyDBDescription extends RdsCommon
{
    public $action = 'ModifyDBDescription';
}
