<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setProductKeyList($ProductKeyList)
 * @method array getProductKeyList()
 * @method $this setCategoryKeyList($CategoryKeyList)
 * @method array getCategoryKeyList()
 * @method $this setTagList($TagList)
 * @method array getTagList()
 * @method $this setAppKey($AppKey)
 * @method string getAppKey()
 */
final class QueryAppDeviceList extends IotCommon
{
    public $action = 'QueryAppDeviceList';
}
