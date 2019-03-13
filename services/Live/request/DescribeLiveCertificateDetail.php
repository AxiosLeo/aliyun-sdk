<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setCertName($CertName)
 * @method string getCertName()
 */
final class DescribeLiveCertificateDetail extends LiveCommon
{
    public $action = 'DescribeLiveCertificateDetail';
}
