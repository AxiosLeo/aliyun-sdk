<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setCertName($CertName)
 * @method string getCertName()
 */
final class DescribeVodCertificateDetail extends VodCommon
{
    public $action = 'DescribeVodCertificateDetail';
}
