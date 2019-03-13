<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setBillingCycle($BillingCycle)
 * @method string getBillingCycle()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setIsHideZeroCharge($IsHideZeroCharge)
 * @method boolean getIsHideZeroCharge()
 * @method $this setIsDisplayLocalCurrency($IsDisplayLocalCurrency)
 * @method boolean getIsDisplayLocalCurrency()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryBill extends BssOpenApiCommon
{
    public $action = 'QueryBill';
}
