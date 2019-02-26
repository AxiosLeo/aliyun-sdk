<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setBillingCycle($BillingCycle)
 * @method string getBillingCycle()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 */
final class QueryInstanceGaapCost extends BssOpenApiCommon
{
    public $action = 'QueryInstanceGaapCost';
}
