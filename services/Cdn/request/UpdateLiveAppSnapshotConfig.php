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
 * @method $this setTimeInterval($TimeInterval)
 * @method integer getTimeInterval()
 * @method $this setOssEndpoint($OssEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($OssBucket)
 * @method string getOssBucket()
 * @method $this setOverwriteOssObject($OverwriteOssObject)
 * @method string getOverwriteOssObject()
 * @method $this setSequenceOssObject($SequenceOssObject)
 * @method string getSequenceOssObject()
 */
final class UpdateLiveAppSnapshotConfig extends CdnCommon
{
    public $action = 'UpdateLiveAppSnapshotConfig';
}
