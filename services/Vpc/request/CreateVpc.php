<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCidrBlock($CidrBlock)
 * @method string getCidrBlock()
 * @method $this setIpv6CidrBlock($Ipv6CidrBlock)
 * @method string getIpv6CidrBlock()
 * @method $this setEnableIpv6($EnableIpv6)
 * @method boolean getEnableIpv6()
 * @method $this setVpcName($VpcName)
 * @method string getVpcName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setUserCidr($UserCidr)
 * @method string getUserCidr()
 */
final class CreateVpc extends VpcCommon
{
    public $action = 'CreateVpc';
}
