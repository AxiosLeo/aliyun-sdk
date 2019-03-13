<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setTargetClusterId($TargetClusterId)
 * @method string getTargetClusterId()
 * @method $this setPassword($Password)
 * @method string getPassword()
 */
final class TransformClusterMember extends EdasCommon
{
    public $action = 'TransformClusterMember';
}
