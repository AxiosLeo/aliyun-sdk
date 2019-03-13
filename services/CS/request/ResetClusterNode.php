<?php
namespace aliyun\sdk\services\CS\request;

use aliyun\sdk\services\CS\CSCommon;

/**
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class ResetClusterNode extends CSCommon
{
    public $action = 'ResetClusterNode';
}
