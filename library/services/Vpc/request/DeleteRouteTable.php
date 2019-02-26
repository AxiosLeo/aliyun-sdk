<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 */
final class DeleteRouteTable extends VpcCommon
{
    public $action = 'DeleteRouteTable';
}
