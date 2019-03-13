<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setSearchMac($SearchMac)
 * @method string getSearchMac()
 * @method $this setSearchIp($SearchIp)
 * @method string getSearchIp()
 * @method $this setSearchProtocal($SearchProtocal)
 * @method string getSearchProtocal()
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
final class ListApStaStatus extends CloudwfCommon
{
    public $action = 'ListApStaStatus';
}
