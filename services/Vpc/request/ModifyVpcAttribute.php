<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setVpcName($VpcName)
 * @method string getVpcName()
 * @method $this setCidrBlock($CidrBlock)
 * @method string getCidrBlock()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEnableIPv6($EnableIPv6)
 * @method boolean getEnableIPv6()
 */
final class ModifyVpcAttribute extends VpcCommon
{
    public $action = 'ModifyVpcAttribute';
}
