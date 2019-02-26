<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCertificateName($CertificateName)
 * @method string getCertificateName()
 * @method $this setCertificateBody($CertificateBody)
 * @method string getCertificateBody()
 * @method $this setCertificatePrivateKey($CertificatePrivateKey)
 * @method string getCertificatePrivateKey()
 */
final class SetDomain extends CloudAPICommon
{
    public $action = 'SetDomain';
}
