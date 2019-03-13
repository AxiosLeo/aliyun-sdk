<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 */
final class CheckServiceExist extends CSBCommon
{
    public $action = 'CheckServiceExist';
}
