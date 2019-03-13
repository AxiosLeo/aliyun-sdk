<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 */
final class DescribeDatabases extends PolardbCommon
{
    public $action = 'DescribeDatabases';
}
