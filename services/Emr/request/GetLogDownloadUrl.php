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
 * @method $this setLogFileName($LogFileName)
 * @method string getLogFileName()
 */
final class GetLogDownloadUrl extends EmrCommon
{
    public $action = 'GetLogDownloadUrl';
}
