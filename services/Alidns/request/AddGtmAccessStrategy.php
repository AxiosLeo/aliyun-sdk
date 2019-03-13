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
 * @method $this setStrategyName($StrategyName)
 * @method string getStrategyName()
 * @method $this setDefaultAddrPoolId($DefaultAddrPoolId)
 * @method string getDefaultAddrPoolId()
 * @method $this setFailoverAddrPoolId($FailoverAddrPoolId)
 * @method string getFailoverAddrPoolId()
 * @method $this setAccessLines($AccessLines)
 * @method string getAccessLines()
 */
final class AddGtmAccessStrategy extends AlidnsCommon
{
    public $action = 'AddGtmAccessStrategy';
}
