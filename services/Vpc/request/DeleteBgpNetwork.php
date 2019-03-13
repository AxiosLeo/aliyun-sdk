<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDstCidrBlock($DstCidrBlock)
 * @method string getDstCidrBlock()
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DeleteBgpNetwork extends VpcCommon
{
    public $action = 'DeleteBgpNetwork';
}
