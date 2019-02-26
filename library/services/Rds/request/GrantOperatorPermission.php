<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setExpiredTime($ExpiredTime)
 * @method string getExpiredTime()
 * @method $this setPrivileges($Privileges)
 * @method string getPrivileges()
 */
final class GrantOperatorPermission extends RdsCommon
{
    public $action = 'GrantOperatorPermission';
}
