<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setQueryTotalCount($QueryTotalCount)
 * @method boolean getQueryTotalCount()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryProductList extends BssOpenApiCommon
{
    public $action = 'QueryProductList';
}
