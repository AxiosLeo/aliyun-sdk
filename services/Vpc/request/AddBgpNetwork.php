<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDstCidrBlock($DstCidrBlock)
 * @method string getDstCidrBlock()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AddBgpNetwork extends VpcCommon
{
    public $action = 'AddBgpNetwork';
}
