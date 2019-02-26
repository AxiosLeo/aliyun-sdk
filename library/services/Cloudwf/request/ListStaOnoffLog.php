<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setSearchApName($SearchApName)
 * @method string getSearchApName()
 * @method $this setSearchSsid($SearchSsid)
 * @method string getSearchSsid()
 * @method $this setSearchUsername($SearchUsername)
 * @method string getSearchUsername()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setOrderCol($OrderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($OrderDir)
 * @method string getOrderDir()
 */
final class ListStaOnoffLog extends CloudwfCommon
{
    public $action = 'ListStaOnoffLog';
}
