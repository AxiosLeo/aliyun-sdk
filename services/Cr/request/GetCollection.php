<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetCollection extends CrCommon
{
    public $action = 'GetCollection';
}
