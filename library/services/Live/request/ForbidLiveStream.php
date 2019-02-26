<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setLiveStreamType($LiveStreamType)
 * @method string getLiveStreamType()
 * @method $this setOneshot($Oneshot)
 * @method string getOneshot()
 * @method $this setControlStreamAction($ControlStreamAction)
 * @method string getControlStreamAction()
 * @method $this setResumeTime($ResumeTime)
 * @method string getResumeTime()
 */
final class ForbidLiveStream extends LiveCommon
{
    public $action = 'ForbidLiveStream';
}
