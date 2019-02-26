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
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setRecordId($RecordId)
 * @method string getRecordId()
 */
final class DescribeLiveStreamRecordIndexFile extends LiveCommon
{
    public $action = 'DescribeLiveStreamRecordIndexFile';
}
