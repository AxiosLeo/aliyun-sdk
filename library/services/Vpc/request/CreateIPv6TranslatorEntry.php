<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($Ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setEntryName($EntryName)
 * @method string getEntryName()
 * @method $this setEntryDescription($EntryDescription)
 * @method string getEntryDescription()
 * @method $this setAllocateIpv6Port($AllocateIpv6Port)
 * @method integer getAllocateIpv6Port()
 * @method $this setBackendIpv4Addr($BackendIpv4Addr)
 * @method string getBackendIpv4Addr()
 * @method $this setBackendIpv4Port($BackendIpv4Port)
 * @method integer getBackendIpv4Port()
 * @method $this setTransProtocol($TransProtocol)
 * @method string getTransProtocol()
 * @method $this setEntryBandwidth($EntryBandwidth)
 * @method integer getEntryBandwidth()
 * @method $this setAclStatus($AclStatus)
 * @method string getAclStatus()
 * @method $this setAclType($AclType)
 * @method string getAclType()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 */
final class CreateIPv6TranslatorEntry extends VpcCommon
{
    public $action = 'CreateIPv6TranslatorEntry';
}
