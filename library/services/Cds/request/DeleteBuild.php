<?php
namespace aliyun\sdk\services\Cds\request;

use aliyun\sdk\services\Cds\CdsCommon;

/**
 * @method $this setJobName($JobName)
 * @method string getJobName()
 * @method $this setBuildNumber($BuildNumber)
 * @method integer getBuildNumber()
 */
final class DeleteBuild extends CdsCommon
{
    public $action = 'DeleteBuild';
}
