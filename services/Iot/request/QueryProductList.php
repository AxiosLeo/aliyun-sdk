<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setAliyunCommodityCode($AliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 */
final class QueryProductList extends IotCommon
{
    public $action = 'QueryProductList';
}
