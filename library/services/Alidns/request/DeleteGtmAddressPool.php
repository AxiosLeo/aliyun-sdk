<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setAddrPoolId($AddrPoolId)
 * @method string getAddrPoolId()
 */
final class DeleteGtmAddressPool extends AlidnsCommon
{
    public $action = 'DeleteGtmAddressPool';
}
