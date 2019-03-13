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
 * @method $this setInstanceVersion($InstanceVersion)
 * @method string getInstanceVersion()
 * @method $this setMonth($Month)
 * @method integer getMonth()
 */
final class QueryCreateInstancePrice extends AlidnsCommon
{
    public $action = 'QueryCreateInstancePrice';
}
