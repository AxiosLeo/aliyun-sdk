<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setUserName($UserName)
 * @method string getUserName()
 */
final class DeleteFlowProjectUser extends EmrCommon
{
    public $action = 'DeleteFlowProjectUser';
}
