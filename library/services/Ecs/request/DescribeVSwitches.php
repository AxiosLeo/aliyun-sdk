<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIsDefault($IsDefault)
 * @method boolean getIsDefault()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVSwitches extends EcsCommon
{
    public $action = 'DescribeVSwitches';
}
