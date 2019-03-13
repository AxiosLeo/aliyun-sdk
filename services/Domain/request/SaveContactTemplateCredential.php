<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setContactTemplateId($ContactTemplateId)
 * @method integer getContactTemplateId()
 * @method $this setCredential($Credential)
 * @method string getCredential()
 * @method $this setCredentialNo($CredentialNo)
 * @method string getCredentialNo()
 */
final class SaveContactTemplateCredential extends DomainCommon
{
    public $action = 'SaveContactTemplateCredential';
}
