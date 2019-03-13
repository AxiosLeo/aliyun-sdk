<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 * @method $this setBindUrl($BindUrl)
 * @method string getBindUrl()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setContactGroups($ContactGroups)
 * @method string getContactGroups()
 */
final class CreateMyGroups extends CmsCommon
{
    public $action = 'CreateMyGroups';
}
