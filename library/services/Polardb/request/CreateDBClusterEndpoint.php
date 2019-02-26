<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setEndpointType($EndpointType)
 * @method string getEndpointType()
 * @method $this setNodes($Nodes)
 * @method string getNodes()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateDBClusterEndpoint extends PolardbCommon
{
    public $action = 'CreateDBClusterEndpoint';
}
