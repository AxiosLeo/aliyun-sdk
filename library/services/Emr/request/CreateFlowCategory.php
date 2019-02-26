<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setParentId($ParentId)
 * @method string getParentId()
 */
final class CreateFlowCategory extends EmrCommon
{
    public $action = 'CreateFlowCategory';
}
