<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($SuperGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryDeviceGroupList extends IotCommon
{
    public $action = 'QueryDeviceGroupList';
}
