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
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSaleId($SaleId)
 * @method string getSaleId()
 * @method $this setContactTemplateId($ContactTemplateId)
 * @method integer getContactTemplateId()
 */
final class SaveTaskForSubmittingDomainNameCredentialByTemplateId extends DomainCommon
{
    public $action = 'SaveTaskForSubmittingDomainNameCredentialByTemplateId';
}
