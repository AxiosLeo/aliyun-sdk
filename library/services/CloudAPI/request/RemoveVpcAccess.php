<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPort($Port)
 * @method integer getPort()
 */
final class RemoveVpcAccess extends CloudAPICommon
{
    public $action = 'RemoveVpcAccess';
}
