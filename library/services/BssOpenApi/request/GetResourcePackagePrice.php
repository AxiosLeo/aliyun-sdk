<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setPackageType($PackageType)
 * @method string getPackageType()
 * @method $this setEffectiveDate($EffectiveDate)
 * @method string getEffectiveDate()
 * @method $this setSpecification($Specification)
 * @method string getSpecification()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 */
final class GetResourcePackagePrice extends BssOpenApiCommon
{
    public $action = 'GetResourcePackagePrice';
}
