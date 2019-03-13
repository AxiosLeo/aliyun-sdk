<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setShutdownPolicy($ShutdownPolicy)
 * @method string getShutdownPolicy()
 */
final class SetZeroCreditShutdownPolicy extends AgencyCommon
{
    public $action = 'SetZeroCreditShutdownPolicy';
}
