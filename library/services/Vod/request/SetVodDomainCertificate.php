<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

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
 * @method $this setRegion($Region)
 * @method string getRegion()
 */
final class SetVodDomainCertificate extends VodCommon
{
    public $action = 'SetVodDomainCertificate';
}
