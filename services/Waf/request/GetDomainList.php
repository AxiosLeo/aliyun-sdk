<?php
namespace aliyun\sdk\services\Waf\request;

use aliyun\sdk\services\Waf\WafCommon;

/**
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetDomainList extends WafCommon
{
    public $action = 'GetDomainList';
}
