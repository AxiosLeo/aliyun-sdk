<?php
namespace aliyun\sdk\services\HPC\request;

use aliyun\sdk\services\HPC\HPCCommon;

/**
 * @method $this setTOKEN($TOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setForce($Force)
 * @method integer getForce()
 */
final class RebootJumpserver extends HPCCommon
{
    public $action = 'RebootJumpserver';
}
