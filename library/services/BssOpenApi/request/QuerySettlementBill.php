<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setBillingCycle($BillingCycle)
 * @method string getBillingCycle()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
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
 */
final class QuerySettlementBill extends BssOpenApiCommon
{
    public $action = 'QuerySettlementBill';
}
