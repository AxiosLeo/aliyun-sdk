<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setRenewalPeriod($RenewalPeriod)
 * @method integer getRenewalPeriod()
 * @method $this setInstanceIDs($InstanceIDs)
 * @method string getInstanceIDs()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setRenewalPeriodUnit($RenewalPeriodUnit)
 * @method string getRenewalPeriodUnit()
 * @method $this setRenewalStatus($RenewalStatus)
 * @method string getRenewalStatus()
 */
final class SetRenewal extends BssOpenApiCommon
{
    public $action = 'SetRenewal';
}
