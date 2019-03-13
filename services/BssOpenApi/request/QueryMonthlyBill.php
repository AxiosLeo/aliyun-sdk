<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setBillingCycle($BillingCycle)
 * @method string getBillingCycle()
 */
final class QueryMonthlyBill extends BssOpenApiCommon
{
    public $action = 'QueryMonthlyBill';
}
