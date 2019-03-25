<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setNavParentId($NavParentId)
 * @method string getNavParentId()
 */
final class CreateETLJob extends EmrCommon
{
    public $action = 'CreateETLJob';
}
