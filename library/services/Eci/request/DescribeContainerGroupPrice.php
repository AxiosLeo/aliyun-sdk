<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCpu($Cpu)
 * @method float getCpu()
 * @method $this setMemory($Memory)
 * @method float getMemory()
 */
final class DescribeContainerGroupPrice extends EciCommon
{
    public $action = 'DescribeContainerGroupPrice';
}
