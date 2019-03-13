<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setId($Id)
 * @method string getId()
 */
final class DeleteFlowJob extends EmrCommon
{
    public $action = 'DeleteFlowJob';
}
