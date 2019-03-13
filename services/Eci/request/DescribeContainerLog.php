<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setContainerGroupId($ContainerGroupId)
 * @method string getContainerGroupId()
 * @method $this setContainerName($ContainerName)
 * @method string getContainerName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setTail($Tail)
 * @method integer getTail()
 */
final class DescribeContainerLog extends EciCommon
{
    public $action = 'DescribeContainerLog';
}
