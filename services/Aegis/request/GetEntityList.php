<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 * @method $this setRegionNo($RegionNo)
 * @method string getRegionNo()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetEntityList extends AegisCommon
{
    public $action = 'GetEntityList';
}
