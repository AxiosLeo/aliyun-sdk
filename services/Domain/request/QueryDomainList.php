<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setQueryType($QueryType)
 * @method string getQueryType()
 * @method $this setStartDate($StartDate)
 * @method string getStartDate()
 * @method $this setEndDate($EndDate)
 * @method string getEndDate()
 * @method $this setDeadStartDate($DeadStartDate)
 * @method integer getDeadStartDate()
 * @method $this setDeadEndDate($DeadEndDate)
 * @method integer getDeadEndDate()
 * @method $this setRegStartDate($RegStartDate)
 * @method integer getRegStartDate()
 * @method $this setRegEndDate($RegEndDate)
 * @method integer getRegEndDate()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setOrderByType($OrderByType)
 * @method string getOrderByType()
 * @method $this setOrderKeyType($OrderKeyType)
 * @method string getOrderKeyType()
 * @method $this setDomainType($DomainType)
 * @method string getDomainType()
 * @method $this setProductDomainType($ProductDomainType)
 * @method string getProductDomainType()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryDomainList extends DomainCommon
{
    public $action = 'QueryDomainList';
}
