<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSearchTempName($SearchTempName)
 * @method string getSearchTempName()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 */
final class ListPageConfigTemplate extends CloudwfCommon
{
    public $action = 'ListPageConfigTemplate';
}
