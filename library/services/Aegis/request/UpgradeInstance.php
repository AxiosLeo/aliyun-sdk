<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setVersionCode($VersionCode)
 * @method integer getVersionCode()
 * @method $this setVmNumber($VmNumber)
 * @method integer getVmNumber()
 */
final class UpgradeInstance extends AegisCommon
{
    public $action = 'UpgradeInstance';
}
