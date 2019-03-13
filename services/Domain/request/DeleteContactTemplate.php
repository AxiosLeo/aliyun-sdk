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
 */
final class DeleteContactTemplate extends DomainCommon
{
    public $action = 'DeleteContactTemplate';
}
