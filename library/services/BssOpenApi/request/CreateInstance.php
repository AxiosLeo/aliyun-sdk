<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setParameter($Parameter)
 * @method array getParameter()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setRenewalStatus($RenewalStatus)
 * @method string getRenewalStatus()
 * @method $this setRenewPeriod($RenewPeriod)
 * @method integer getRenewPeriod()
 */
final class CreateInstance extends BssOpenApiCommon
{
    public $action = 'CreateInstance';
}
