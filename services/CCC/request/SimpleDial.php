<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCaller($Caller)
 * @method string getCaller()
 * @method $this setCallee($Callee)
 * @method string getCallee()
 * @method $this setContractFlowId($ContractFlowId)
 * @method string getContractFlowId()
 */
final class SimpleDial extends CCCCommon
{
    public $action = 'SimpleDial';
}
