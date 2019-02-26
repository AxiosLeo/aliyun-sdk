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
 * @method $this setModifyType($ModifyType)
 * @method string getModifyType()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setParameter($Parameter)
 * @method array getParameter()
 */
final class ModifyInstance extends BssOpenApiCommon
{
    public $action = 'ModifyInstance';
}
