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
 * @method $this setSearchApModelName($SearchApModelName)
 * @method string getSearchApModelName()
 * @method $this setSearchGroupName($SearchGroupName)
 * @method string getSearchGroupName()
 * @method $this setSearchWanIp($SearchWanIp)
 * @method string getSearchWanIp()
 * @method $this setSearchSwVersion($SearchSwVersion)
 * @method integer getSearchSwVersion()
 * @method $this setSearchBssEquals($SearchBssEquals)
 * @method integer getSearchBssEquals()
 * @method $this setSearchStatus($SearchStatus)
 * @method integer getSearchStatus()
 * @method $this setSearchCompanyName($SearchCompanyName)
 * @method string getSearchCompanyName()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setOrderCol($OrderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($OrderDir)
 * @method string getOrderDir()
 */
final class ListApStatus extends CloudwfCommon
{
    public $action = 'ListApStatus';
}
