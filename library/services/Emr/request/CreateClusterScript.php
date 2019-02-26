<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPath($Path)
 * @method string getPath()
 * @method $this setArgs($Args)
 * @method string getArgs()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setNodeIdList($NodeIdList)
 * @method string getNodeIdList()
 */
final class CreateClusterScript extends EmrCommon
{
    public $action = 'CreateClusterScript';
}
