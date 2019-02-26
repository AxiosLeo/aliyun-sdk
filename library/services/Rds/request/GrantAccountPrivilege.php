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
 * @method $this setAccountPrivilege($AccountPrivilege)
 * @method string getAccountPrivilege()
 */
final class GrantAccountPrivilege extends RdsCommon
{
    public $action = 'GrantAccountPrivilege';
}
