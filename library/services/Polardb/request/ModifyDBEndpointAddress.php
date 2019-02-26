<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBEndpointId($DBEndpointId)
 * @method string getDBEndpointId()
 * @method $this setNetType($NetType)
 * @method string getNetType()
 * @method $this setConnectionStringPrefix($ConnectionStringPrefix)
 * @method string getConnectionStringPrefix()
 */
final class ModifyDBEndpointAddress extends PolardbCommon
{
    public $action = 'ModifyDBEndpointAddress';
}
