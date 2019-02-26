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
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setMinAvailableAddrNum($MinAvailableAddrNum)
 * @method integer getMinAvailableAddrNum()
 * @method $this setAddr($Addr)
 * @method array getAddr()
 */
final class UpdateGtmAddressPool extends AlidnsCommon
{
    public $action = 'UpdateGtmAddressPool';
}
