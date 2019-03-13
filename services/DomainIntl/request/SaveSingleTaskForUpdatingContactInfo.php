<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegistrantProfileId($RegistrantProfileId)
 * @method integer getRegistrantProfileId()
 * @method $this setContactType($ContactType)
 * @method string getContactType()
 * @method $this setAddTransferLock($AddTransferLock)
 * @method boolean getAddTransferLock()
 */
final class SaveSingleTaskForUpdatingContactInfo extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForUpdatingContactInfo';
}
