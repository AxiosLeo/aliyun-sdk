<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setProductKeyList($ProductKeyList)
 * @method array getProductKeyList()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryDeviceList extends IotCommon
{
    public $action = 'QueryDeviceList';
}
