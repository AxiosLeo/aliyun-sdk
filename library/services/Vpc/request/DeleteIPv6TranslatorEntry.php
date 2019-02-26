<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorEntryId($Ipv6TranslatorEntryId)
 * @method string getIpv6TranslatorEntryId()
 * @method $this setIpv6TranslatorId($Ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 */
final class DeleteIPv6TranslatorEntry extends VpcCommon
{
    public $action = 'DeleteIPv6TranslatorEntry';
}
