<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 */
final class DescribeDomainTopReferVisit extends CdnCommon
{
    public $action = 'DescribeDomainTopReferVisit';
}
