<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setDefault($Default)
 * @method boolean getDefault()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class MetastoreModifyDataResource extends EmrCommon
{
    public $action = 'MetastoreModifyDataResource';
}
