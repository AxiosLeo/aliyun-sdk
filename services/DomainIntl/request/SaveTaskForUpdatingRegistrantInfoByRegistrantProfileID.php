<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($RegistrantProfileId)
 * @method integer getRegistrantProfileId()
 * @method $this setDomainName($DomainName)
 * @method array getDomainName()
 * @method $this setTransferOutProhibited($TransferOutProhibited)
 * @method boolean getTransferOutProhibited()
 */
final class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends DomainIntlCommon
{
    public $action = 'SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID';
}
