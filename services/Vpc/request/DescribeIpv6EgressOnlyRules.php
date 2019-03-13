<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($Ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setIpv6EgressOnlyRuleId($Ipv6EgressOnlyRuleId)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeIpv6EgressOnlyRules extends VpcCommon
{
    public $action = 'DescribeIpv6EgressOnlyRules';
}
