<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCertName($CertName)
 * @method string getCertName()
 * @method $this setServerCertificateStatus($ServerCertificateStatus)
 * @method string getServerCertificateStatus()
 * @method $this setServerCertificate($ServerCertificate)
 * @method string getServerCertificate()
 * @method $this setPrivateKey($PrivateKey)
 * @method string getPrivateKey()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setCertType($CertType)
 * @method string getCertType()
 * @method $this setForceSet($ForceSet)
 * @method string getForceSet()
 */
final class SetDomainServerCertificate extends CdnCommon
{
    public $action = 'SetDomainServerCertificate';
}
