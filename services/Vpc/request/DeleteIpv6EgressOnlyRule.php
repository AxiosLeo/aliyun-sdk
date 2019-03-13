<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6EgressOnlyRuleId($Ipv6EgressOnlyRuleId)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DeleteIpv6EgressOnlyRule extends VpcCommon
{
    public $action = 'DeleteIpv6EgressOnlyRule';
}
