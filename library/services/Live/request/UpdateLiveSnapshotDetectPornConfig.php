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
 * @method $this setOssObject($OssObject)
 * @method string getOssObject()
 * @method $this setInterval($Interval)
 * @method integer getInterval()
 * @method $this setScene($Scene)
 * @method array getScene()
 */
final class UpdateLiveSnapshotDetectPornConfig extends LiveCommon
{
    public $action = 'UpdateLiveSnapshotDetectPornConfig';
}
