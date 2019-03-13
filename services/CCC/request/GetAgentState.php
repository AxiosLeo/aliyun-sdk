<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDn($Dn)
 * @method string getDn()
 * @method $this setAgentId($AgentId)
 * @method string getAgentId()
 */
final class GetAgentState extends CCCCommon
{
    public $action = 'GetAgentState';
}
