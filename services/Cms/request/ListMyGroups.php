<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setSelectContactGroups($SelectContactGroups)
 * @method boolean getSelectContactGroups()
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setBindUrls($BindUrls)
 * @method string getBindUrls()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class ListMyGroups extends CmsCommon
{
    public $action = 'ListMyGroups';
}
