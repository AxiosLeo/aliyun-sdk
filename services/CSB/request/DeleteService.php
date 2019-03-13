<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 */
final class DeleteService extends CSBCommon
{
    public $action = 'DeleteService';
}
