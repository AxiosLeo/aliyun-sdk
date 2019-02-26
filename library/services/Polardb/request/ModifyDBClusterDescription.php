<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBClusterDescription($DBClusterDescription)
 * @method string getDBClusterDescription()
 */
final class ModifyDBClusterDescription extends PolardbCommon
{
    public $action = 'ModifyDBClusterDescription';
}
