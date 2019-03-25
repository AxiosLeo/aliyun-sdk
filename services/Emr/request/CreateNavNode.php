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
 * @method $this setCategoryType($CategoryType)
 * @method string getCategoryType()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setObjectId($ObjectId)
 * @method string getObjectId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setParentId($ParentId)
 * @method string getParentId()
 */
final class CreateNavNode extends EmrCommon
{
    public $action = 'CreateNavNode';
}
