<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($Ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setAllocateIpv6Addr($AllocateIpv6Addr)
 * @method string getAllocateIpv6Addr()
 * @method $this setAllocateIpv4Addr($AllocateIpv4Addr)
 * @method string getAllocateIpv4Addr()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setBusinessStatus($BusinessStatus)
 * @method string getBusinessStatus()
 */
final class DescribeIPv6Translators extends VpcCommon
{
    public $action = 'DescribeIPv6Translators';
}
