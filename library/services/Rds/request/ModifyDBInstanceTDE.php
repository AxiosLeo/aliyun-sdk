<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTDEStatus($TDEStatus)
 * @method string getTDEStatus()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 */
final class ModifyDBInstanceTDE extends RdsCommon
{
    public $action = 'ModifyDBInstanceTDE';
}
