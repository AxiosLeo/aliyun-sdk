<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouteEntryName($RouteEntryName)
 * @method string getRouteEntryName()
 * @method $this setRouteEntryId($RouteEntryId)
 * @method string getRouteEntryId()
 */
final class ModifyRouteEntry extends VpcCommon
{
    public $action = 'ModifyRouteEntry';
}
