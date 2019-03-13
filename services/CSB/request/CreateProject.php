<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setData($Data)
 * @method string getData()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class CreateProject extends CSBCommon
{
    public $action = 'CreateProject';
}
