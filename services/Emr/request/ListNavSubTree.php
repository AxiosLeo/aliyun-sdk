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
 * @method $this setParentId($ParentId)
 * @method string getParentId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setName($Name)
 * @method string getName()
 */
final class ListNavSubTree extends EmrCommon
{
    public $action = 'ListNavSubTree';
}
