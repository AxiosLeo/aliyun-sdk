<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setlifecycleHookId($lifecycleHookId)
 * @method string getlifecycleHookId()
 * @method $this setlifecycleActionToken($lifecycleActionToken)
 * @method string getlifecycleActionToken()
 * @method $this setheartbeatTimeout($heartbeatTimeout)
 * @method integer getheartbeatTimeout()
 */
final class RecordLifecycleActionHeartbeat extends EssCommon
{
    public $action = 'RecordLifecycleActionHeartbeat';
}
