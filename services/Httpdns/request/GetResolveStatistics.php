<?php
namespace aliyun\sdk\services\Httpdns\request;

use aliyun\sdk\services\Httpdns\HttpdnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setGranularity($Granularity)
 * @method string getGranularity()
 * @method $this setTimeSpan($TimeSpan)
 * @method integer getTimeSpan()
 * @method $this setProtocolName($ProtocolName)
 * @method string getProtocolName()
 */
final class GetResolveStatistics extends HttpdnsCommon
{
    public $action = 'GetResolveStatistics';
}
