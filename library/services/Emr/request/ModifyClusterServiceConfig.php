<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setComment($Comment)
 * @method string getComment()
 * @method $this setConfigParams($ConfigParams)
 * @method string getConfigParams()
 * @method $this setCustomConfigParams($CustomConfigParams)
 * @method string getCustomConfigParams()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setHostInstanceId($HostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setConfigType($ConfigType)
 * @method string getConfigType()
 */
final class ModifyClusterServiceConfig extends EmrCommon
{
    public $action = 'ModifyClusterServiceConfig';
}
