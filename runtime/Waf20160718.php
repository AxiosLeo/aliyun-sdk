<?php

namespace aliyun\sdk\services\Waf20160718;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160718
 *
 * @package aliyun\sdk\services\Waf20160718
 * @method AddDomain AddDomain()
 * @method WhetherBuy WhetherBuy()
 * @method UpdateDomain UpdateDomain()
 * @method UserIsBuyWaf UserIsBuyWaf()
 * @method WebAttackCount WebAttackCount()
 * @method GetDomainList GetDomainList()
 * @method SummaryStatistics SummaryStatistics()
 * @method GetDomainInfo GetDomainInfo()
 */
class V20160718
{
}

/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setIsProxy($isProxy)
 * @method int getIsProxy()
 */
class AddDomain extends Request
{

}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class WhetherBuy extends Request
{

}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setIsProxy($isProxy)
 * @method int getIsProxy()
 */
class UpdateDomain extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class UserIsBuyWaf extends Request
{

}/**
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomains($domains)
 * @method string getDomains()
 */
class WebAttackCount extends Request
{

}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetDomainList extends Request
{

}/**
 * @method $this setdays($days)
 * @method int getdays()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SummaryStatistics extends Request
{

}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class GetDomainInfo extends Request
{

}