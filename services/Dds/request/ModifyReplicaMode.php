<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setReplicaId($ReplicaId)
 * @method string getReplicaId()
 * @method $this setReplicaMode($ReplicaMode)
 * @method string getReplicaMode()
 * @method $this setPrimaryInstanceId($PrimaryInstanceId)
 * @method string getPrimaryInstanceId()
 * @method $this setDomainMode($DomainMode)
 * @method string getDomainMode()
 */
final class ModifyReplicaMode extends DdsCommon
{
    public $action = 'ModifyReplicaMode';
}
