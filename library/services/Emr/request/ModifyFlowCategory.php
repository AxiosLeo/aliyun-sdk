<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setParentId($ParentId)
 * @method string getParentId()
 */
final class ModifyFlowCategory extends EmrCommon
{
    public $action = 'ModifyFlowCategory';
}
