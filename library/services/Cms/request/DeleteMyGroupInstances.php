<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 */
final class DeleteMyGroupInstances extends CmsCommon
{
    public $action = 'DeleteMyGroupInstances';
}
