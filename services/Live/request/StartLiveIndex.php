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
 * @method $this setTokenId($TokenId)
 * @method string getTokenId()
 * @method $this setInputUrl($InputUrl)
 * @method string getInputUrl()
 * @method $this setInterval($Interval)
 * @method integer getInterval()
 * @method $this setOssBucket($OssBucket)
 * @method string getOssBucket()
 * @method $this setOssEndpoint($OssEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssUserId($OssUserId)
 * @method string getOssUserId()
 * @method $this setOssRamRole($OssRamRole)
 * @method string getOssRamRole()
 */
final class StartLiveIndex extends LiveCommon
{
    public $action = 'StartLiveIndex';
}
