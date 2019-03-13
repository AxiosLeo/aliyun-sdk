<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setQuota($Quota)
 * @method string getQuota()
 * @method $this setRatio($Ratio)
 * @method string getRatio()
 */
final class SetUserGreenManagerConfig extends CdnCommon
{
    public $action = 'SetUserGreenManagerConfig';
}
