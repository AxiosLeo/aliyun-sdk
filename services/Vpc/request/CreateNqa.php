<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDestinationIp($DestinationIp)
 * @method string getDestinationIp()
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateNqa extends VpcCommon
{
    public $action = 'CreateNqa';
}
