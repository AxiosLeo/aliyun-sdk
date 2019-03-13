<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSearchMac($SearchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($SearchName)
 * @method string getSearchName()
 * @method $this setSearchScan($SearchScan)
 * @method integer getSearchScan()
 * @method $this setSearchModel($SearchModel)
 * @method string getSearchModel()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setOrderCol($OrderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($OrderDir)
 * @method string getOrderDir()
 */
final class ListBriefApConfig extends CloudwfCommon
{
    public $action = 'ListBriefApConfig';
}
