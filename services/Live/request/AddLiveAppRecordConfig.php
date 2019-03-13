<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setOssEndpoint($OssEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($OssBucket)
 * @method string getOssBucket()
 * @method $this setRecordFormat($RecordFormat)
 * @method array getRecordFormat()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setOnDemand($OnDemand)
 * @method integer getOnDemand()
 */
final class AddLiveAppRecordConfig extends LiveCommon
{
    public $action = 'AddLiveAppRecordConfig';
}
