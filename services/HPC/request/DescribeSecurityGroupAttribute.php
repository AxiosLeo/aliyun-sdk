<?php
namespace aliyun\sdk\services\HPC\request;

use aliyun\sdk\services\HPC\HPCCommon;

/**
 * @method $this setTOKEN($TOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNicType($NicType)
 * @method string getNicType()
 */
final class DescribeSecurityGroupAttribute extends HPCCommon
{
    public $action = 'DescribeSecurityGroupAttribute';
}
