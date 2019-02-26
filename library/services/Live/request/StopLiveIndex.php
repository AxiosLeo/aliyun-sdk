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
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 */
final class StopLiveIndex extends LiveCommon
{
    public $action = 'StopLiveIndex';
}
