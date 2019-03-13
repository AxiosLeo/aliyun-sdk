<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLifecycleHookId($LifecycleHookId)
 * @method string getLifecycleHookId()
 * @method $this setLifecycleActionToken($LifecycleActionToken)
 * @method string getLifecycleActionToken()
 * @method $this setLifecycleActionResult($LifecycleActionResult)
 * @method string getLifecycleActionResult()
 */
final class CompleteLifecycleAction extends EssCommon
{
    public $action = 'CompleteLifecycleAction';
}
