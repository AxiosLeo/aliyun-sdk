<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteFlow extends EmrCommon
{
    public $action = 'DeleteFlow';
}
