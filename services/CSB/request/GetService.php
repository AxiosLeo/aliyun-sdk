<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 */
final class GetService extends CSBCommon
{
    public $action = 'GetService';
}
