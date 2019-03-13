<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setServicePeriodUnit($ServicePeriodUnit)
 * @method string getServicePeriodUnit()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 * @method $this setServicePeriodQuantity($ServicePeriodQuantity)
 * @method integer getServicePeriodQuantity()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setModuleList($ModuleList)
 * @method array getModuleList()
 * @method $this setQuantity($Quantity)
 * @method integer getQuantity()
 */
final class GetSubscriptionPrice extends BssOpenApiCommon
{
    public $action = 'GetSubscriptionPrice';
}
