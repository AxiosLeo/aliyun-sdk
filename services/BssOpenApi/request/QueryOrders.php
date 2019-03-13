<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setCreateTimeEnd($CreateTimeEnd)
 * @method string getCreateTimeEnd()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 * @method $this setPaymentStatus($PaymentStatus)
 * @method string getPaymentStatus()
 * @method $this setCreateTimeStart($CreateTimeStart)
 * @method string getCreateTimeStart()
 */
final class QueryOrders extends BssOpenApiCommon
{
    public $action = 'QueryOrders';
}
