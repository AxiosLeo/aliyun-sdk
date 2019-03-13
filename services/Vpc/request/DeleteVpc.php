<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteVpc extends VpcCommon
{
    public $action = 'DeleteVpc';
}
