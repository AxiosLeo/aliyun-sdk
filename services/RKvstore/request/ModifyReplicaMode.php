<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

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
final class ModifyReplicaMode extends RKvstoreCommon
{
    public $action = 'ModifyReplicaMode';
}
