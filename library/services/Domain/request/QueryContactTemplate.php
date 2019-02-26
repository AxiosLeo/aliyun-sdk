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
 * @method $this setCCompany($CCompany)
 * @method string getCCompany()
 * @method $this setECompany($ECompany)
 * @method string getECompany()
 * @method $this setContactTemplateId($ContactTemplateId)
 * @method integer getContactTemplateId()
 * @method $this setDefaultTemplate($DefaultTemplate)
 * @method boolean getDefaultTemplate()
 * @method $this setAuditStatus($AuditStatus)
 * @method string getAuditStatus()
 * @method $this setRegType($RegType)
 * @method string getRegType()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryContactTemplate extends DomainCommon
{
    public $action = 'QueryContactTemplate';
}
