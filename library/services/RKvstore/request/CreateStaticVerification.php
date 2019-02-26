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
 * @method $this setSourceInstanceId($SourceInstanceId)
 * @method string getSourceInstanceId()
 * @method $this setDestinationInstanceId($DestinationInstanceId)
 * @method string getDestinationInstanceId()
 */
final class CreateStaticVerification extends RKvstoreCommon
{
    public $action = 'CreateStaticVerification';
}
