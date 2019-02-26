<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DisableVpcClassicLink extends VpcCommon
{
    public $action = 'DisableVpcClassicLink';
}
