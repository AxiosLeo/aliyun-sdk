<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setParentId($ParentId)
 * @method integer getParentId()
 * @method $this setName($Name)
 * @method string getName()
 */
final class ModifyJobExecutionPlanFolder extends EmrCommon
{
    public $action = 'ModifyJobExecutionPlanFolder';
}
