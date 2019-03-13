<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 */
final class RevokeAccountPrivilege extends RdsCommon
{
    public $action = 'RevokeAccountPrivilege';
}
