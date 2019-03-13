<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCertName($CertName)
 * @method string getCertName()
 * @method $this setSSLProtocol($SSLProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($SSLPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($SSLPri)
 * @method string getSSLPri()
 */
final class SetLiveDomainCertificate extends LiveCommon
{
    public $action = 'SetLiveDomainCertificate';
}
