<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRenewPeriod($RenewPeriod)
 * @method integer getRenewPeriod()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 */
final class RenewInstance extends BssOpenApiCommon
{
    public $action = 'RenewInstance';
}
