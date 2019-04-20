<?php

namespace aliyun\sdk\services\Scdn20171115;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171115
 *
 * @package aliyun\sdk\services\Scdn20171115
 * @method DeleteScdnSpecificConfig DeleteScdnSpecificConfig()
 * @method DescribeCertificateList DescribeCertificateList()
 * @method DescribeDomainConfigs DescribeDomainConfigs()
 * @method UpdateScdnDomain UpdateScdnDomain()
 * @method DescribeScdnCcTopUrl DescribeScdnCcTopUrl()
 * @method DescribeScdnDdosTrafficInfo DescribeScdnDdosTrafficInfo()
 * @method StopScdnDomain StopScdnDomain()
 * @method DescribeScdnDomainRealTimeReqHitRateData DescribeScdnDomainRealTimeReqHitRateData()
 * @method DescribeScdnDomainRealTimeSrcBpsData DescribeScdnDomainRealTimeSrcBpsData()
 * @method BatchStopScdnDomain BatchStopScdnDomain()
 * @method OpenScdnService OpenScdnService()
 * @method DescribeScdnUserDomains DescribeScdnUserDomains()
 * @method DescribeScdnDomainOriginBpsData DescribeScdnDomainOriginBpsData()
 * @method DescribeScdnDomainRealTimeTrafficData DescribeScdnDomainRealTimeTrafficData()
 * @method RefreshObjectCaches RefreshObjectCaches()
 * @method BatchDeleteScdnDomainConfigs BatchDeleteScdnDomainConfigs()
 * @method StartScdnDomain StartScdnDomain()
 * @method BatchDeleteDomainConfigs BatchDeleteDomainConfigs()
 * @method BatchStartScdnDomain BatchStartScdnDomain()
 * @method DescribeScdnDomainIspData DescribeScdnDomainIspData()
 * @method DescribeScdnCcTopIp DescribeScdnCcTopIp()
 * @method BatchSetDomainConfigs BatchSetDomainConfigs()
 * @method DescribeUserDomains DescribeUserDomains()
 * @method DescribeScdnDomainHitRateData DescribeScdnDomainHitRateData()
 * @method DescribeScdnRefreshQuota DescribeScdnRefreshQuota()
 * @method DescribeScdnDdosInfo DescribeScdnDdosInfo()
 * @method DescribeScdnTopDomainsByFlow DescribeScdnTopDomainsByFlow()
 * @method DescribeRefreshTasks DescribeRefreshTasks()
 * @method DescribeScdnDomainConfigs DescribeScdnDomainConfigs()
 * @method DescribeScdnDomainCname DescribeScdnDomainCname()
 * @method BatchUpdateScdnDomain BatchUpdateScdnDomain()
 * @method DescribeScdnDDoSTrafficPeak DescribeScdnDDoSTrafficPeak()
 * @method DescribeScdnDomainPvData DescribeScdnDomainPvData()
 * @method DescribeScdnDomainLog DescribeScdnDomainLog()
 * @method DescribeCertificateDetail DescribeCertificateDetail()
 * @method DescribeScdnCertificateList DescribeScdnCertificateList()
 * @method DescribeScdnDomainOriginTrafficData DescribeScdnDomainOriginTrafficData()
 * @method DescribeScdnDomainCertificateInfo DescribeScdnDomainCertificateInfo()
 * @method DescribeScdnBotInfoList DescribeScdnBotInfoList()
 * @method DescribeScdnIpInfo DescribeScdnIpInfo()
 * @method DescribeScdnBotInfo DescribeScdnBotInfo()
 * @method DescribeScdnUserProtectInfo DescribeScdnUserProtectInfo()
 * @method DescribeScdnCcData DescribeScdnCcData()
 * @method BatchSetScdnDomainConfigs BatchSetScdnDomainConfigs()
 * @method RefreshScdnObjectCaches RefreshScdnObjectCaches()
 * @method DescribeScdnCcQpsInfo DescribeScdnCcQpsInfo()
 * @method DescribeScdnDomainTopUrlVisit DescribeScdnDomainTopUrlVisit()
 * @method DescribeScdnDomainTrafficData DescribeScdnDomainTrafficData()
 * @method DescribeScdnDomainHttpCodeData DescribeScdnDomainHttpCodeData()
 * @method DescribeScdnDomainRealTimeBpsData DescribeScdnDomainRealTimeBpsData()
 * @method DescribeScdnDomainUvData DescribeScdnDomainUvData()
 * @method DescribeScdnUserType DescribeScdnUserType()
 * @method DescribeScdnDomainRegionData DescribeScdnDomainRegionData()
 * @method DeleteSpecificConfig DeleteSpecificConfig()
 * @method DeleteScdnDomain DeleteScdnDomain()
 * @method DescribeScdnDomainBpsData DescribeScdnDomainBpsData()
 * @method SetDomainServerCertificate SetDomainServerCertificate()
 * @method SetDomainCertificate SetDomainCertificate()
 * @method DescribeScdnDomainRealTimeByteHitRateData DescribeScdnDomainRealTimeByteHitRateData()
 * @method AddScdnDomain AddScdnDomain()
 * @method DescribeRefreshQuota DescribeRefreshQuota()
 * @method DescribeScdnDomainRealTimeQpsData DescribeScdnDomainRealTimeQpsData()
 * @method DescribeScdnDomainRealTimeSrcTrafficData DescribeScdnDomainRealTimeSrcTrafficData()
 * @method CheckScdnService CheckScdnService()
 * @method DescribeScdnService DescribeScdnService()
 * @method DescribeScdnDomainCcInfo DescribeScdnDomainCcInfo()
 * @method DescribeScdnRefreshTasks DescribeScdnRefreshTasks()
 * @method DescribeScdnDomainRealTimeHttpCodeData DescribeScdnDomainRealTimeHttpCodeData()
 * @method DescribeScdnUserQuota DescribeScdnUserQuota()
 * @method DescribeScdnDomainQpsData DescribeScdnDomainQpsData()
 * @method SetScdnBotInfo SetScdnBotInfo()
 * @method DescribeScdnDomainDetail DescribeScdnDomainDetail()
 * @method DescribeScdnDDoSAttackInfo DescribeScdnDDoSAttackInfo()
 * @method DescribeScdnCcInfo DescribeScdnCcInfo()
 * @method SetScdnDomainCertificate SetScdnDomainCertificate()
 * @method DescribeScdnCertificateDetail DescribeScdnCertificateDetail()
 * @method DescribeScdnCcDomainList DescribeScdnCcDomainList()
 * @method SetScdnDomainBizInfo SetScdnDomainBizInfo()
 * @method SetScdnCcInfo SetScdnCcInfo()
 * @method SetScdnDdosInfo SetScdnDdosInfo()
 * @method DescribeScdnDomainBizHistory DescribeScdnDomainBizHistory()
 * @method SetScdnDomainCcInfo SetScdnDomainCcInfo()
 * @method DescribeScdnDomainTopReferVisit DescribeScdnDomainTopReferVisit()
 * @method PreloadScdnObjectCaches PreloadScdnObjectCaches()
 * @method PreloadObjectCaches PreloadObjectCaches()
 */
class V20171115
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteScdnSpecificConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeCertificateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class DescribeDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class UpdateScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnCcTopUrl extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setLine($line)
 * @method string getLine()
 */
class DescribeScdnDdosTrafficInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeReqHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeSrcBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStopScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setProtectType($protectType)
 * @method string getProtectType()
 * @method $this setDDoSBasic($dDoSBasic)
 * @method int getDDoSBasic()
 * @method $this setElasticProtection($elasticProtection)
 * @method int getElasticProtection()
 * @method $this setCcProtection($ccProtection)
 * @method int getCcProtection()
 * @method $this setDomainCount($domainCount)
 * @method int getDomainCount()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class OpenScdnService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainStatus($domainStatus)
 * @method string getDomainStatus()
 * @method $this setDomainSearchType($domainSearchType)
 * @method string getDomainSearchType()
 * @method $this setCheckDomainShow($checkDomainShow)
 * @method bool getCheckDomainShow()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setFuncId($funcId)
 * @method string getFuncId()
 * @method $this setFuncFilter($funcFilter)
 * @method string getFuncFilter()
 */
class DescribeScdnUserDomains extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeScdnDomainOriginBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class BatchDeleteScdnDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class BatchDeleteDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStartScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainIspData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnCcTopIp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctions($functions)
 * @method string getFunctions()
 */
class BatchSetDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainStatus($domainStatus)
 * @method string getDomainStatus()
 * @method $this setDomainSearchType($domainSearchType)
 * @method string getDomainSearchType()
 * @method $this setCheckDomainShow($checkDomainShow)
 * @method bool getCheckDomainShow()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setFuncId($funcId)
 * @method string getFuncId()
 * @method $this setFuncFilter($funcFilter)
 * @method string getFuncFilter()
 */
class DescribeUserDomains extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeScdnDomainHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnRefreshQuota extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnDdosInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class DescribeScdnTopDomainsByFlow extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DescribeRefreshTasks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class DescribeScdnDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnDomainCname extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class BatchUpdateScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDDoSTrafficPeak extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainPvData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainLog extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class DescribeCertificateDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnCertificateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeScdnDomainOriginTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnDomainCertificateInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class DescribeScdnBotInfoList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setIP($iP)
 * @method string getIP()
 */
class DescribeScdnIpInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnBotInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnUserProtectInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnCcData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctions($functions)
 * @method string getFunctions()
 */
class BatchSetScdnDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshScdnObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnCcQpsInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class DescribeScdnDomainTopUrlVisit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeScdnDomainTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeScdnDomainHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainUvData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnUserType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRegionData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteSpecificConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DeleteScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeScdnDomainBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setSSLProtocol($sSLProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($sSLPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($sSLPri)
 * @method string getSSLPri()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetDomainServerCertificate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setSSLProtocol($sSLProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($sSLPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($sSLPri)
 * @method string getSSLPri()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetDomainCertificate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeByteHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setScope($scope)
 * @method string getScope()
 */
class AddScdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeRefreshQuota extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeQpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDomainRealTimeSrcTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class CheckScdnService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnDomainCcInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DescribeScdnRefreshTasks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeScdnDomainRealTimeHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnUserQuota extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeScdnDomainQpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SetScdnBotInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnDomainDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeScdnDDoSAttackInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeScdnCcInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertType($certType)
 * @method string getCertType()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setSSLProtocol($sSLProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($sSLPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($sSLPri)
 * @method string getSSLPri()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setForceSet($forceSet)
 * @method string getForceSet()
 */
class SetScdnDomainCertificate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class DescribeScdnCertificateDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class DescribeScdnCcDomainList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setBizName($bizName)
 * @method string getBizName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class SetScdnDomainBizInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SetScdnCcInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setElasticBandwidth($elasticBandwidth)
 * @method int getElasticBandwidth()
 */
class SetScdnDdosInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeScdnDomainBizHistory extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class SetScdnDomainCcInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class DescribeScdnDomainTopReferVisit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setArea($area)
 * @method string getArea()
 */
class PreloadScdnObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 */
class PreloadObjectCaches extends Request
{

}