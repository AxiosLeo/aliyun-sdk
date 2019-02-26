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
 * @method $this setDBName($DBName)
 * @method string getDBName()
 */
final class RevokeAccountPrivilege extends PolardbCommon
{
    public $action = 'RevokeAccountPrivilege';
}
