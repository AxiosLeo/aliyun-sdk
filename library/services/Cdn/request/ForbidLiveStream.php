<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setLiveStreamType($LiveStreamType)
 * @method string getLiveStreamType()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setResumeTime($ResumeTime)
 * @method string getResumeTime()
 */
final class ForbidLiveStream extends CdnCommon
{
    public $action = 'ForbidLiveStream';
}
