<?php

namespace aliyun\sdk\services\Httpdns20160201;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160201
 *
 * @package aliyun\sdk\services\Httpdns20160201
 * @method GetResolveCountSummary GetResolveCountSummary()
 * @method AddDomain AddDomain()
 * @method ListDomains ListDomains()
 * @method GetAccountInfo GetAccountInfo()
 * @method GetResolveStatistics GetResolveStatistics()
 * @method DescribeDomains DescribeDomains()
 * @method DeleteDomain DeleteDomain()
 */
class V20160201
{
}

/**
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
 * @method $this setTimeSpan($timeSpan)
 * @method int getTimeSpan()
 */
class GetResolveCountSummary extends Request
{
}/**
 * @method $this setAccountId($accountId)
 * @method string getAccountId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class AddDomain extends Request
{
}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDomains extends Request
{
}/**
 */
class GetAccountInfo extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
 * @method $this setTimeSpan($timeSpan)
 * @method int getTimeSpan()
 * @method $this setProtocolName($protocolName)
 * @method string getProtocolName()
 */
class GetResolveStatistics extends Request
{
}/**
 * @method $this setAccountId($accountId)
 * @method string getAccountId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDomains extends Request
{
}/**
 * @method $this setAccountId($accountId)
 * @method string getAccountId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteDomain extends Request
{
}
