<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 * @method $this setQps($Qps)
 * @method string getQps()
 */
final class UpdateServiceQPS extends CSBCommon
{
    public $action = 'UpdateServiceQPS';
}
