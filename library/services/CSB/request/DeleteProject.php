<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setProjectId($ProjectId)
 * @method integer getProjectId()
 */
final class DeleteProject extends CSBCommon
{
    public $action = 'DeleteProject';
}
