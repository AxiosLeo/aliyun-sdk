<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterName($CasterName)
 * @method string getCasterName()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setNormType($NormType)
 * @method integer getNormType()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setPurchaseTime($PurchaseTime)
 * @method string getPurchaseTime()
 * @method $this setExpireTime($ExpireTime)
 * @method string getExpireTime()
 * @method $this setCasterTemplate($CasterTemplate)
 * @method string getCasterTemplate()
 */
final class CreateCaster extends LiveCommon
{
    public $action = 'CreateCaster';
}
