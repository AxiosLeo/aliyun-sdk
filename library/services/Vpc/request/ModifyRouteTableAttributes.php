<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setRouteTableName($RouteTableName)
 * @method string getRouteTableName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 * @method $this setKbpsBandwidth($KbpsBandwidth)
 * @method string getKbpsBandwidth()
 * @method $this setResourceBid($ResourceBid)
 * @method string getResourceBid()
 * @method $this setResourceUid($ResourceUid)
 * @method integer getResourceUid()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ModifyRouteTableAttributes extends VpcCommon
{
    public $action = 'ModifyRouteTableAttributes';
}
