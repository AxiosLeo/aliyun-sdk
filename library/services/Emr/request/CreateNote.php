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
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 */
final class CreateNote extends EmrCommon
{
    public $action = 'CreateNote';
}
