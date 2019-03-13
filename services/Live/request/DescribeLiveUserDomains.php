<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setLiveDomainType($LiveDomainType)
 * @method string getLiveDomainType()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setRegionName($RegionName)
 * @method string getRegionName()
 * @method $this setDomainSearchType($DomainSearchType)
 * @method string getDomainSearchType()
 * @method $this setDomainStatus($DomainStatus)
 * @method string getDomainStatus()
 */
final class DescribeLiveUserDomains extends LiveCommon
{
    public $action = 'DescribeLiveUserDomains';
}
