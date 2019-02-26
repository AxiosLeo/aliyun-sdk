<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setDefault($Default)
 * @method boolean getDefault()
 * @method $this setMetaType($MetaType)
 * @method string getMetaType()
 * @method $this setAccessType($AccessType)
 * @method string getAccessType()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class MetastoreCreateDataResource extends EmrCommon
{
    public $action = 'MetastoreCreateDataResource';
}
