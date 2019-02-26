<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($AccountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountType($AccountType)
 * @method string getAccountType()
 * @method $this setAccountDescription($AccountDescription)
 * @method string getAccountDescription()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 * @method $this setAccountPrivilege($AccountPrivilege)
 * @method string getAccountPrivilege()
 */
final class CreateAccount extends PolardbCommon
{
    public $action = 'CreateAccount';
}
