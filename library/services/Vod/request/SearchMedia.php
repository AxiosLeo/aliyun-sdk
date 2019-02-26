<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSearchType($SearchType)
 * @method string getSearchType()
 * @method $this setFields($Fields)
 * @method string getFields()
 * @method $this setMatch($Match)
 * @method string getMatch()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setScrollToken($ScrollToken)
 * @method string getScrollToken()
 * @method $this setSessionId($SessionId)
 * @method string getSessionId()
 */
final class SearchMedia extends VodCommon
{
    public $action = 'SearchMedia';
}
