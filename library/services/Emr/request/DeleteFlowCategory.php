<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 */
final class DeleteFlowCategory extends EmrCommon
{
    public $action = 'DeleteFlowCategory';
}
