<?php
namespace aliyun\sdk\services\Cloudauth\request;

use aliyun\sdk\services\Cloudauth\CloudauthCommon;

/**
 * @method $this setVerifyToken($VerifyToken)
 * @method string getVerifyToken()
 * @method $this setMaterial($Material)
 * @method array getMaterial()
 */
final class SubmitMaterials extends CloudauthCommon
{
    public $action = 'SubmitMaterials';
}
