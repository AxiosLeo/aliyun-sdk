<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setExpiryTimeStart($ExpiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setExpiryTimeEnd($ExpiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryResourcePackageInstances extends BssOpenApiCommon
{
    public $action = 'QueryResourcePackageInstances';
}
