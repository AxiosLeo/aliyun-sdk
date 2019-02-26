<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setQualifiedName($QualifiedName)
 * @method string getQualifiedName()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setParentQueueId($ParentQueueId)
 * @method integer getParentQueueId()
 * @method $this setLeaf($Leaf)
 * @method boolean getLeaf()
 * @method $this setResourcePoolId($ResourcePoolId)
 * @method integer getResourcePoolId()
 * @method $this setConfig($Config)
 * @method array getConfig()
 */
final class CreateResourceQueue extends EmrCommon
{
    public $action = 'CreateResourceQueue';
}
