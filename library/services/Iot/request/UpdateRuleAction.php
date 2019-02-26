<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setActionId($ActionId)
 * @method integer getActionId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setConfiguration($Configuration)
 * @method string getConfiguration()
 */
final class UpdateRuleAction extends IotCommon
{
    public $action = 'UpdateRuleAction';
}
