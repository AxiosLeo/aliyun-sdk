<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class ConvertChargeType extends BssOpenApiCommon
{
    public $action = 'ConvertChargeType';
}
