<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setNextToken($NextToken)
 * @method string getNextToken()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setContainerGroupIds($ContainerGroupIds)
 * @method string getContainerGroupIds()
 * @method $this setContainerGroupName($ContainerGroupName)
 * @method string getContainerGroupName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class DescribeContainerGroups extends EciCommon
{
    public $action = 'DescribeContainerGroups';
}
