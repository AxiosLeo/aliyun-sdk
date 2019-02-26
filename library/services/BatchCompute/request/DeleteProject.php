<?php
namespace aliyun\sdk\services\BatchCompute\request;

use aliyun\sdk\services\BatchCompute\BatchComputeCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 */
final class DeleteProject extends BatchComputeCommon
{
    public $action = 'DeleteProject';
}
