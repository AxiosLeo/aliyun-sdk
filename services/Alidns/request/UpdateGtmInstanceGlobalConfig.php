<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setTtl($Ttl)
 * @method integer getTtl()
 * @method $this setUserDomainName($UserDomainName)
 * @method string getUserDomainName()
 * @method $this setLbaStrategy($LbaStrategy)
 * @method string getLbaStrategy()
 * @method $this setAlertGroup($AlertGroup)
 * @method string getAlertGroup()
 */
final class UpdateGtmInstanceGlobalConfig extends AlidnsCommon
{
    public $action = 'UpdateGtmInstanceGlobalConfig';
}
