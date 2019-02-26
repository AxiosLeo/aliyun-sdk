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
 * @method $this setHostInnerIp($HostInnerIp)
 * @method string getHostInnerIp()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setLogstoreName($LogstoreName)
 * @method string getLogstoreName()
 * @method $this setFromTimestamp($FromTimestamp)
 * @method integer getFromTimestamp()
 * @method $this setToTimestamp($ToTimestamp)
 * @method integer getToTimestamp()
 * @method $this setSlsQueryString($SlsQueryString)
 * @method string getSlsQueryString()
 * @method $this setOffset($Offset)
 * @method integer getOffset()
 * @method $this setLine($Line)
 * @method integer getLine()
 * @method $this setReverse($Reverse)
 * @method boolean getReverse()
 */
final class SearchLog extends EmrCommon
{
    public $action = 'SearchLog';
}
