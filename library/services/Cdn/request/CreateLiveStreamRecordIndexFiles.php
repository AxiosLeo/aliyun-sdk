<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setOssEndpoint($OssEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($OssBucket)
 * @method string getOssBucket()
 * @method $this setOssObject($OssObject)
 * @method string getOssObject()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class CreateLiveStreamRecordIndexFiles extends CdnCommon
{
    public $action = 'CreateLiveStreamRecordIndexFiles';
}
