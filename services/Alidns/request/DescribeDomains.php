<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSearchMode($SearchMode)
 * @method string getSearchMode()
 */
final class DescribeDomains extends AlidnsCommon
{
    public $action = 'DescribeDomains';
}
