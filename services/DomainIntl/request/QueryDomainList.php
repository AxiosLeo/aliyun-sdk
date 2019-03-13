<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setStartExpirationDate($StartExpirationDate)
 * @method integer getStartExpirationDate()
 * @method $this setQueryType($QueryType)
 * @method string getQueryType()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setEndExpirationDate($EndExpirationDate)
 * @method integer getEndExpirationDate()
 * @method $this setStartRegistrationDate($StartRegistrationDate)
 * @method integer getStartRegistrationDate()
 * @method $this setEndRegistrationDate($EndRegistrationDate)
 * @method integer getEndRegistrationDate()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setOrderByType($OrderByType)
 * @method string getOrderByType()
 * @method $this setOrderKeyType($OrderKeyType)
 * @method string getOrderKeyType()
 * @method $this setProductDomainType($ProductDomainType)
 * @method string getProductDomainType()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryDomainList extends DomainIntlCommon
{
    public $action = 'QueryDomainList';
}
