<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 * @method $this setBindUrls($BindUrls)
 * @method string getBindUrls()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setContactGroups($ContactGroups)
 * @method string getContactGroups()
 */
final class UpdateMyGroups extends CmsCommon
{
    public $action = 'UpdateMyGroups';
}
