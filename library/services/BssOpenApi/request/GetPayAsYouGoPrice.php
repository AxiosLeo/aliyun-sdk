<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setModuleList($ModuleList)
 * @method array getModuleList()
 */
final class GetPayAsYouGoPrice extends BssOpenApiCommon
{
    public $action = 'GetPayAsYouGoPrice';
}
