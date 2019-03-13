<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setCsbName($CsbName)
 * @method string getCsbName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServices($Services)
 * @method string getServices()
 */
final class CommitSuccessedServices extends CSBCommon
{
    public $action = 'CommitSuccessedServices';
}
