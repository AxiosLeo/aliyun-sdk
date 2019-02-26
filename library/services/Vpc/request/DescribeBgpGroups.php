<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setBgpGroupId($BgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIsDefault($IsDefault)
 * @method boolean getIsDefault()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeBgpGroups extends VpcCommon
{
    public $action = 'DescribeBgpGroups';
}
