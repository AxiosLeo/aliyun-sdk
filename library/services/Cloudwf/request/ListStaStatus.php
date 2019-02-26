<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setOrderCol($OrderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($OrderDir)
 * @method string getOrderDir()
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
 * @method $this setSearchApName($SearchApName)
 * @method string getSearchApName()
 * @method $this setSearchGroupName($SearchGroupName)
 * @method string getSearchGroupName()
 * @method $this setSearchStatus($SearchStatus)
 * @method integer getSearchStatus()
 * @method $this setSearchDescription($SearchDescription)
 * @method string getSearchDescription()
 */
final class ListStaStatus extends CloudwfCommon
{
    public $action = 'ListStaStatus';
}
