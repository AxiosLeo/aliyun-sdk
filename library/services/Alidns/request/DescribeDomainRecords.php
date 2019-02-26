<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setRRKeyWord($RRKeyWord)
 * @method string getRRKeyWord()
 * @method $this setTypeKeyWord($TypeKeyWord)
 * @method string getTypeKeyWord()
 * @method $this setValueKeyWord($ValueKeyWord)
 * @method string getValueKeyWord()
 * @method $this setOrderBy($OrderBy)
 * @method string getOrderBy()
 * @method $this setDirection($Direction)
 * @method string getDirection()
 * @method $this setSearchMode($SearchMode)
 * @method string getSearchMode()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 */
final class DescribeDomainRecords extends AlidnsCommon
{
    public $action = 'DescribeDomainRecords';
}
