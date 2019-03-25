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
 * @method $this setSourceType($SourceType)
 * @method string getSourceType()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setConf($Conf)
 * @method string getConf()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setNavParentId($NavParentId)
 * @method string getNavParentId()
 */
final class CreateDataSource extends EmrCommon
{
    public $action = 'CreateDataSource';
}
