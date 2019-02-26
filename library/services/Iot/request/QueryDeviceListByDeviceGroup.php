<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 */
final class QueryDeviceListByDeviceGroup extends IotCommon
{
    public $action = 'QueryDeviceListByDeviceGroup';
}
