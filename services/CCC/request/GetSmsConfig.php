<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setScenario($Scenario)
 * @method array getScenario()
 */
final class GetSmsConfig extends CCCCommon
{
    public $action = 'GetSmsConfig';
}
