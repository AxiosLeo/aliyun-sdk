<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDestinationIp($DestinationIp)
 * @method string getDestinationIp()
 * @method $this setNqaId($NqaId)
 * @method string getNqaId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyNqa extends VpcCommon
{
    public $action = 'ModifyNqa';
}
