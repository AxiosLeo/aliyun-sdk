<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($Ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setIpv6TranslatorEntryId($Ipv6TranslatorEntryId)
 * @method string getIpv6TranslatorEntryId()
 * @method $this setEntryName($EntryName)
 * @method string getEntryName()
 * @method $this setAllocateIpv6Addr($AllocateIpv6Addr)
 * @method string getAllocateIpv6Addr()
 * @method $this setAllocateIpv6Port($AllocateIpv6Port)
 * @method integer getAllocateIpv6Port()
 * @method $this setBackendIpv4Addr($BackendIpv4Addr)
 * @method string getBackendIpv4Addr()
 * @method $this setBackendIpv4Port($BackendIpv4Port)
 * @method integer getBackendIpv4Port()
 * @method $this setTransProtocol($TransProtocol)
 * @method string getTransProtocol()
 * @method $this setAclStatus($AclStatus)
 * @method string getAclStatus()
 * @method $this setAclType($AclType)
 * @method string getAclType()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DescribeIPv6TranslatorEntries extends VpcCommon
{
    public $action = 'DescribeIPv6TranslatorEntries';
}
