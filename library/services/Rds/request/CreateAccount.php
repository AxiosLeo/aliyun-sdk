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
 * @method $this setAccountPassword($AccountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountDescription($AccountDescription)
 * @method string getAccountDescription()
 * @method $this setAccountType($AccountType)
 * @method string getAccountType()
 */
final class CreateAccount extends RdsCommon
{
    public $action = 'CreateAccount';
}
