<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 * @method $this setOrigin($Origin)
 * @method string getOrigin()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class SearchRepo extends CrCommon
{
    public $action = 'SearchRepo';
}
