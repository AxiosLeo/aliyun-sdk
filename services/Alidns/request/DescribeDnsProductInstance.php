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
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class DescribeDnsProductInstance extends AlidnsCommon
{
    public $action = 'DescribeDnsProductInstance';
}
