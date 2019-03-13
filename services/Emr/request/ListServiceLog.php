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
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setLogstoreName($LogstoreName)
 * @method string getLogstoreName()
 * @method $this setMarker($Marker)
 * @method string getMarker()
 * @method $this setMaxKeys($MaxKeys)
 * @method integer getMaxKeys()
 */
final class ListServiceLog extends EmrCommon
{
    public $action = 'ListServiceLog';
}
