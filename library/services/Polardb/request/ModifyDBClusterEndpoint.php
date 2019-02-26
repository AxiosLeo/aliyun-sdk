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
 * @method $this setNodes($Nodes)
 * @method string getNodes()
 * @method $this setEndpointConfig($EndpointConfig)
 * @method string getEndpointConfig()
 */
final class ModifyDBClusterEndpoint extends PolardbCommon
{
    public $action = 'ModifyDBClusterEndpoint';
}
