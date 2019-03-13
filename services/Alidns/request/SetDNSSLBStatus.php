<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($SubDomain)
 * @method string getSubDomain()
 * @method $this setOpen($Open)
 * @method boolean getOpen()
 */
final class SetDNSSLBStatus extends AlidnsCommon
{
    public $action = 'SetDNSSLBStatus';
}
