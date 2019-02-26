<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTotalItem($TotalItem)
 * @method integer getTotalItem()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setOrderCol($OrderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($OrderDir)
 * @method string getOrderDir()
 * @method $this setSearchName($SearchName)
 * @method string getSearchName()
 * @method $this setSearchApgroupName($SearchApgroupName)
 * @method string getSearchApgroupName()
 * @method $this setMapType($MapType)
 * @method integer getMapType()
 */
final class ListApPositionMap extends CloudwfCommon
{
    public $action = 'ListApPositionMap';
}
