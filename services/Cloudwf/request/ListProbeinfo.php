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
 * @method $this setSearchUserMac($SearchUserMac)
 * @method string getSearchUserMac()
 * @method $this setSearchSensorName($SearchSensorName)
 * @method string getSearchSensorName()
 * @method $this setSearchSensorMac($SearchSensorMac)
 * @method string getSearchSensorMac()
 */
final class ListProbeinfo extends CloudwfCommon
{
    public $action = 'ListProbeinfo';
}
