<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setData($Data)
 * @method string getData()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 */
final class CreateService extends CSBCommon
{
    public $action = 'CreateService';
}
