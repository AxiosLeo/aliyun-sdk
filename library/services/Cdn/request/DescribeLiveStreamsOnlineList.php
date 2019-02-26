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
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setStreamType($StreamType)
 * @method string getStreamType()
 */
final class DescribeLiveStreamsOnlineList extends CdnCommon
{
    public $action = 'DescribeLiveStreamsOnlineList';
}
