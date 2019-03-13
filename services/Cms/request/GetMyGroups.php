<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setSelectContactGroups($SelectContactGroups)
 * @method boolean getSelectContactGroups()
 * @method $this setBindUrl($BindUrl)
 * @method string getBindUrl()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class GetMyGroups extends CmsCommon
{
    public $action = 'GetMyGroups';
}
