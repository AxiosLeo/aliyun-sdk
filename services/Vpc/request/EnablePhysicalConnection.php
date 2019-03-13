<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class EnablePhysicalConnection extends VpcCommon
{
    public $action = 'EnablePhysicalConnection';
}
