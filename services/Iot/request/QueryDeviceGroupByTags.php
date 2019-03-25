<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryDeviceGroupByTags extends IotCommon
{
    public $action = 'QueryDeviceGroupByTags';
}
