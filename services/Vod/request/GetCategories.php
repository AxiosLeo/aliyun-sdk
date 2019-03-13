<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 */
final class GetCategories extends VodCommon
{
    public $action = 'GetCategories';
}
