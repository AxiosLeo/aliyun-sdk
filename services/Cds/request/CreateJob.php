<?php
namespace aliyun\sdk\services\Cds\request;

use aliyun\sdk\services\Cds\CdsCommon;

/**
 * @method $this setJobName($JobName)
 * @method string getJobName()
 * @method $this setDeployType($DeployType)
 * @method string getDeployType()
 * @method $this setJsonContent($JsonContent)
 * @method string getJsonContent()
 */
final class CreateJob extends CdsCommon
{
    public $action = 'CreateJob';
}
