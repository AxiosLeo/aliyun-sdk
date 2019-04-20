<?php

namespace aliyun\sdk\services\CloudAPI20160201;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160201
 *
 * @package aliyun\sdk\services\CloudAPI20160201
 * @method IsIncludedByUserWhitelist IsIncludedByUserWhitelist()
 * @method DeleteDomainCertificate DeleteDomainCertificate()
 * @method DescribeApiError DescribeApiError()
 * @method CreateApiGroupForInner CreateApiGroupForInner()
 * @method DescribeSystemParameters DescribeSystemParameters()
 * @method DeleteAllTrafficSpecialControl DeleteAllTrafficSpecialControl()
 * @method VipMigrationByUid VipMigrationByUid()
 * @method ResetAppKeySecret ResetAppKeySecret()
 * @method RecoveryApiDefineFromHistorical RecoveryApiDefineFromHistorical()
 * @method DescribeRaceWorksForInner DescribeRaceWorksForInner()
 * @method DescribeApisForBackend DescribeApisForBackend()
 * @method DescribeAvailableVips DescribeAvailableVips()
 * @method VpcRegisterApp VpcRegisterApp()
 * @method DeleteTrafficSpecialControl DeleteTrafficSpecialControl()
 * @method ReactivateDomainForBackend ReactivateDomainForBackend()
 * @method DeleteDomainForBackend DeleteDomainForBackend()
 * @method ModifyGroupExtendForBackend ModifyGroupExtendForBackend()
 * @method DeleteSecretKey DeleteSecretKey()
 * @method AbolishApi AbolishApi()
 * @method DescribeApiGroupDetailForBackend DescribeApiGroupDetailForBackend()
 * @method VpcQueryAppServers VpcQueryAppServers()
 * @method ModifyTrafficControl ModifyTrafficControl()
 * @method DescribeTrafficControls DescribeTrafficControls()
 * @method CreateAppForInner CreateAppForInner()
 * @method AddTrafficSpecialControl AddTrafficSpecialControl()
 * @method SetMockIntegration SetMockIntegration()
 * @method DescribeApis DescribeApis()
 * @method SwitchApiForInner SwitchApiForInner()
 * @method DescribeAppsByApi DescribeAppsByApi()
 * @method DescribeModelsForInner DescribeModelsForInner()
 * @method DescribeApps DescribeApps()
 * @method ModifySecretKey ModifySecretKey()
 * @method DescribeHistoryApis DescribeHistoryApis()
 * @method DescribeRulesByApi DescribeRulesByApi()
 * @method RefundInstance RefundInstance()
 * @method CheckServiceAddressForInner CheckServiceAddressForInner()
 * @method CreateApp CreateApp()
 * @method CreateTrafficControl CreateTrafficControl()
 * @method DeployApi DeployApi()
 * @method DeleteApiGroup DeleteApiGroup()
 * @method SwitchApi SwitchApi()
 * @method LoadVpcAccess LoadVpcAccess()
 * @method SetAccessPermissions SetAccessPermissions()
 * @method SetAccessPermissionsForInner SetAccessPermissionsForInner()
 * @method CreateApiGroup CreateApiGroup()
 * @method ModifyGroupAuthAppCodeForBackend ModifyGroupAuthAppCodeForBackend()
 * @method DescribePurchasedApiGroups DescribePurchasedApiGroups()
 * @method CreateAppForBackend CreateAppForBackend()
 * @method DeleteApp DeleteApp()
 * @method DescribeApisForConsole DescribeApisForConsole()
 * @method ModifyApp ModifyApp()
 * @method CreateRaceWorkForInner CreateRaceWorkForInner()
 * @method DescribePurchasedApis DescribePurchasedApis()
 * @method CreateApiForInner CreateApiForInner()
 * @method RecoverApiFromHistorical RecoverApiFromHistorical()
 * @method RemoveAppsFromApi RemoveAppsFromApi()
 * @method DescribeApi DescribeApi()
 * @method DescribePurchasedApi DescribePurchasedApi()
 * @method VpcRemoveAppServer VpcRemoveAppServer()
 * @method DescribeApiQps DescribeApiQps()
 * @method DescribeSecretKeys DescribeSecretKeys()
 * @method DescribeApiLatency DescribeApiLatency()
 * @method DescribeApiGroupsForBackend DescribeApiGroupsForBackend()
 * @method DescribeApiGroupByApiForInner DescribeApiGroupByApiForInner()
 * @method IsInnerAccountForInner IsInnerAccountForInner()
 * @method CopyConsumerOpenForInner CopyConsumerOpenForInner()
 * @method CreateInstance CreateInstance()
 * @method DescribePurchasedApiGroupDetail DescribePurchasedApiGroupDetail()
 * @method ModifyGroupQpsForBackend ModifyGroupQpsForBackend()
 * @method DescribeSystemParams DescribeSystemParams()
 * @method DescribeApp DescribeApp()
 * @method DescribeAppsForProvider DescribeAppsForProvider()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeApiRules DescribeApiRules()
 * @method CreateSecretKey CreateSecretKey()
 * @method RemoveBlackList RemoveBlackList()
 * @method SetPurchasedApiGroupStatus SetPurchasedApiGroupStatus()
 * @method RemoveApiRule RemoveApiRule()
 * @method DescribeBlackLists DescribeBlackLists()
 * @method SetApiRule SetApiRule()
 * @method DescribeApiGroupDetail DescribeApiGroupDetail()
 * @method ModifyApiGroup ModifyApiGroup()
 * @method SetDomainForBackend SetDomainForBackend()
 * @method DescribeApisByApp DescribeApisByApp()
 * @method DeleteApiForInner DeleteApiForInner()
 * @method SetDomainCertificate SetDomainCertificate()
 * @method DescribeDeployedApi DescribeDeployedApi()
 * @method DescribeApiDocsForBackend DescribeApiDocsForBackend()
 * @method AddBlackList AddBlackList()
 * @method DescribeAppSecurity DescribeAppSecurity()
 * @method DescribeDomainResolution DescribeDomainResolution()
 * @method DescribeRaceWorkForInner DescribeRaceWorkForInner()
 * @method SetAccessPermissionByGroupForBackend SetAccessPermissionByGroupForBackend()
 * @method AbolishApiForInner AbolishApiForInner()
 * @method VpcCreateAddressPool VpcCreateAddressPool()
 * @method CreateApi CreateApi()
 * @method VipMigration VipMigration()
 * @method ResetAppCode ResetAppCode()
 * @method DescribeApiDocs DescribeApiDocs()
 * @method SetAccessPermissionByApis SetAccessPermissionByApis()
 * @method DescribeUserWhiteLists DescribeUserWhiteLists()
 * @method RemoveAccessPermissionByAppsForInner RemoveAccessPermissionByAppsForInner()
 * @method ModifyApi ModifyApi()
 * @method DeleteApi DeleteApi()
 * @method UpdateConsumerOpenInvokeTimesNow UpdateConsumerOpenInvokeTimesNow()
 * @method ModifyApiForInner ModifyApiForInner()
 * @method CheckAccountForInner CheckAccountForInner()
 * @method DescribeDomain DescribeDomain()
 * @method DescribeApiForBackend DescribeApiForBackend()
 * @method DescribeHistoryApi DescribeHistoryApi()
 * @method RemoveAllBlackList RemoveAllBlackList()
 * @method DescribeApiGroups DescribeApiGroups()
 * @method DeleteDomain DeleteDomain()
 * @method DeployApiForInner DeployApiForInner()
 * @method DescribeDeployedApis DescribeDeployedApis()
 * @method SetDomain SetDomain()
 * @method RefreshDomain RefreshDomain()
 * @method RecoveryApiFromHistorical RecoveryApiFromHistorical()
 * @method DescribeDeployedApiForBackend DescribeDeployedApiForBackend()
 * @method RemoveAccessPermissionByApis RemoveAccessPermissionByApis()
 * @method ClearCacheForBackend ClearCacheForBackend()
 * @method DeleteTrafficControl DeleteTrafficControl()
 * @method DescribeAppSecurities DescribeAppSecurities()
 * @method ModifyGroupStatusForBackend ModifyGroupStatusForBackend()
 * @method DescribeApiDoc DescribeApiDoc()
 * @method DescribeApisByRule DescribeApisByRule()
 * @method DescribeApiTraffic DescribeApiTraffic()
 * @method DescribeBidByUserIdForInner DescribeBidByUserIdForInner()
 * @method ModifyDomainStatusForBackend ModifyDomainStatusForBackend()
 * @method RemoveAccessPermissionByApps RemoveAccessPermissionByApps()
 * @method VpcAddAppServer VpcAddAppServer()
 * @method CheckAoneAppAudit CheckAoneAppAudit()
 * @method ResetAppCodeForInner ResetAppCodeForInner()
 */
class V20160201
{
}

/**
 * @method $this setType($type)
 * @method string getType()
 */
class IsIncludedByUserWhitelist extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertificateId($certificateId)
 * @method string getCertificateId()
 */
class DeleteDomainCertificate extends Request
{

}/**
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeApiError extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setSource($source)
 * @method string getSource()
 */
class CreateApiGroupForInner extends Request
{

}/**
 */
class DescribeSystemParameters extends Request
{

}/**
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 */
class DeleteAllTrafficSpecialControl extends Request
{

}/**
 * @method $this setOriginalVip($originalVip)
 * @method string getOriginalVip()
 * @method $this setNewVip($newVip)
 * @method string getNewVip()
 */
class VipMigrationByUid extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 */
class ResetAppKeySecret extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class RecoveryApiDefineFromHistorical extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeRaceWorksForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeApisForBackend extends Request
{

}/**
 * @method $this setVip($vip)
 * @method string getVip()
 */
class DescribeAvailableVips extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcRegisterApp extends Request
{

}/**
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 * @method $this setSpecialType($specialType)
 * @method string getSpecialType()
 * @method $this setSpecialKey($specialKey)
 * @method string getSpecialKey()
 */
class DeleteTrafficSpecialControl extends Request
{

}/**
 * @method $this setAliuid($aliuid)
 * @method int getAliuid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ReactivateDomainForBackend extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteDomainForBackend extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setExcludeApis($excludeApis)
 * @method string getExcludeApis()
 */
class ModifyGroupExtendForBackend extends Request
{

}/**
 * @method $this setSecretKeyId($secretKeyId)
 * @method string getSecretKeyId()
 */
class DeleteSecretKey extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class AbolishApi extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribeApiGroupDetailForBackend extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAddressPoolId($addressPoolId)
 * @method string getAddressPoolId()
 * @method $this setServerIp($serverIp)
 * @method string getServerIp()
 */
class VpcQueryAppServers extends Request
{

}/**
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 * @method $this setTrafficControlName($trafficControlName)
 * @method string getTrafficControlName()
 * @method $this setTrafficControlUnit($trafficControlUnit)
 * @method string getTrafficControlUnit()
 * @method $this setApiDefault($apiDefault)
 * @method int getApiDefault()
 * @method $this setUserDefault($userDefault)
 * @method int getUserDefault()
 * @method $this setAppDefault($appDefault)
 * @method int getAppDefault()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyTrafficControl extends Request
{

}/**
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiUid($apiUid)
 * @method string getApiUid()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setTrafficControlName($trafficControlName)
 * @method string getTrafficControlName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeTrafficControls extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class CreateAppForInner extends Request
{

}/**
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 * @method $this setSpecialType($specialType)
 * @method string getSpecialType()
 * @method $this setSpecialKey($specialKey)
 * @method string getSpecialKey()
 * @method $this setTrafficValue($trafficValue)
 * @method int getTrafficValue()
 */
class AddTrafficSpecialControl extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setMock($mock)
 * @method string getMock()
 * @method $this setMockResult($mockResult)
 * @method string getMockResult()
 */
class SetMockIntegration extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeApis extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class SwitchApiForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAppsByApi extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setModelName($modelName)
 * @method string getModelName()
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class DescribeModelsForInner extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApps extends Request
{

}/**
 * @method $this setSecretKeyId($secretKeyId)
 * @method string getSecretKeyId()
 * @method $this setSecretKeyName($secretKeyName)
 * @method string getSecretKeyName()
 * @method $this setSecretKey($secretKey)
 * @method string getSecretKey()
 * @method $this setSecretValue($secretValue)
 * @method string getSecretValue()
 */
class ModifySecretKey extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class DescribeHistoryApis extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class DescribeRulesByApi extends Request
{

}/**
 * @method $this setSkuId($skuId)
 * @method string getSkuId()
 * @method $this setAccountQuantity($accountQuantity)
 * @method int getAccountQuantity()
 * @method $this setToken($token)
 * @method string getToken()
 */
class RefundInstance extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setServerAddress($serverAddress)
 * @method string getServerAddress()
 */
class CheckServiceAddressForInner extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateApp extends Request
{

}/**
 * @method $this setTrafficControlName($trafficControlName)
 * @method string getTrafficControlName()
 * @method $this setTrafficControlUnit($trafficControlUnit)
 * @method string getTrafficControlUnit()
 * @method $this setApiDefault($apiDefault)
 * @method int getApiDefault()
 * @method $this setUserDefault($userDefault)
 * @method int getUserDefault()
 * @method $this setAppDefault($appDefault)
 * @method int getAppDefault()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateTrafficControl extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class DeployApi extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteApiGroup extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class SwitchApi extends Request
{

}/**
 * @method $this setSourceVpcId($sourceVpcId)
 * @method string getSourceVpcId()
 * @method $this setTargetVpcId($targetVpcId)
 * @method string getTargetVpcId()
 * @method $this setTargetInstance($targetInstance)
 * @method string getTargetInstance()
 * @method $this setPort($port)
 * @method int getPort()
 */
class LoadVpcAccess extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class SetAccessPermissions extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setSource($source)
 * @method string getSource()
 */
class SetAccessPermissionsForInner extends Request
{

}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateApiGroup extends Request
{

}/**
 * @method $this setAuthAppCode($authAppCode)
 * @method string getAuthAppCode()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class ModifyGroupAuthAppCodeForBackend extends Request
{

}/**
 * @method $this setGroupIds($groupIds)
 * @method string getGroupIds()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePurchasedApiGroups extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setSource($source)
 * @method string getSource()
 */
class CreateAppForBackend extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 */
class DeleteApp extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeApisForConsole extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyApp extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setWorkName($workName)
 * @method string getWorkName()
 * @method $this setLogoUrl($logoUrl)
 * @method string getLogoUrl()
 * @method $this setShortDescription($shortDescription)
 * @method string getShortDescription()
 * @method $this setKeywords($keywords)
 * @method string getKeywords()
 */
class CreateRaceWorkForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribePurchasedApis extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setRequestConfig($requestConfig)
 * @method string getRequestConfig()
 * @method $this setServiceConfig($serviceConfig)
 * @method string getServiceConfig()
 * @method $this setRequestParamters($requestParamters)
 * @method string getRequestParamters()
 * @method $this setServiceParameters($serviceParameters)
 * @method string getServiceParameters()
 * @method $this setServiceParametersMap($serviceParametersMap)
 * @method string getServiceParametersMap()
 * @method $this setResultType($resultType)
 * @method string getResultType()
 * @method $this setResultSample($resultSample)
 * @method string getResultSample()
 */
class CreateApiForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class RecoverApiFromHistorical extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 */
class RemoveAppsFromApi extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DescribeApi extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DescribePurchasedApi extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setServerIp($serverIp)
 * @method string getServerIp()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcRemoveAppServer extends Request
{

}/**
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeApiQps extends Request
{

}/**
 * @method $this setSecretKeyId($secretKeyId)
 * @method string getSecretKeyId()
 * @method $this setSecretKeyName($secretKeyName)
 * @method string getSecretKeyName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSecretKeys extends Request
{

}/**
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeApiLatency extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApiGroupsForBackend extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DescribeApiGroupByApiForInner extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setDefaultValue($defaultValue)
 * @method bool getDefaultValue()
 */
class IsInnerAccountForInner extends Request
{

}/**
 * @method $this setCopyList($copyList)
 * @method string getCopyList()
 */
class CopyConsumerOpenForInner extends Request
{

}/**
 * @method $this setSkuId($skuId)
 * @method string getSkuId()
 * @method $this setAccountQuantity($accountQuantity)
 * @method int getAccountQuantity()
 * @method $this setExpiredOn($expiredOn)
 * @method string getExpiredOn()
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setBillingType($billingType)
 * @method string getBillingType()
 * @method $this setCloudMarketInstanceId($cloudMarketInstanceId)
 * @method string getCloudMarketInstanceId()
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setAlarmQuota($alarmQuota)
 * @method int getAlarmQuota()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class CreateInstance extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribePurchasedApiGroupDetail extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setQpsLimit($qpsLimit)
 * @method int getQpsLimit()
 */
class ModifyGroupQpsForBackend extends Request
{

}/**
 */
class DescribeSystemParams extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 */
class DescribeApp extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setAppOwner($appOwner)
 * @method string getAppOwner()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAppsForProvider extends Request
{

}/**
 * @method $this setLanguage($language)
 * @method string getLanguage()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApiRules extends Request
{

}/**
 * @method $this setSecretKeyName($secretKeyName)
 * @method string getSecretKeyName()
 * @method $this setSecretKey($secretKey)
 * @method string getSecretKey()
 * @method $this setSecretValue($secretValue)
 * @method string getSecretValue()
 */
class CreateSecretKey extends Request
{

}/**
 * @method $this setBlackType($blackType)
 * @method string getBlackType()
 * @method $this setBlackContent($blackContent)
 * @method string getBlackContent()
 */
class RemoveBlackList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setBillingStatus($billingStatus)
 * @method string getBillingStatus()
 */
class SetPurchasedApiGroupStatus extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class RemoveApiRule extends Request
{

}/**
 * @method $this setBlackType($blackType)
 * @method string getBlackType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeBlackLists extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class SetApiRule extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribeApiGroupDetail extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyApiGroup extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertificateName($certificateName)
 * @method string getCertificateName()
 * @method $this setCertificateBody($certificateBody)
 * @method string getCertificateBody()
 * @method $this setCertificatePrivateKey($certificatePrivateKey)
 * @method string getCertificatePrivateKey()
 */
class SetDomainForBackend extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApisByApp extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DeleteApiForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertificateName($certificateName)
 * @method string getCertificateName()
 * @method $this setCertificateBody($certificateBody)
 * @method string getCertificateBody()
 * @method $this setPrivateKey($privateKey)
 * @method string getPrivateKey()
 */
class SetDomainCertificate extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class DescribeDeployedApi extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApiDocsForBackend extends Request
{

}/**
 * @method $this setBlackType($blackType)
 * @method string getBlackType()
 * @method $this setBlackContent($blackContent)
 * @method string getBlackContent()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class AddBlackList extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 */
class DescribeAppSecurity extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class DescribeDomainResolution extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribeRaceWorkForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAppId($appId)
 * @method int getAppId()
 */
class SetAccessPermissionByGroupForBackend extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class AbolishApiForInner extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcCreateAddressPool extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBodyFormat($bodyFormat)
 * @method string getBodyFormat()
 * @method $this setPostBodyType($postBodyType)
 * @method string getPostBodyType()
 * @method $this setPostBodyDescription($postBodyDescription)
 * @method string getPostBodyDescription()
 * @method $this setHttpMethod($httpMethod)
 * @method string getHttpMethod()
 * @method $this setHttpProtocol($httpProtocol)
 * @method string getHttpProtocol()
 * @method $this setResultType($resultType)
 * @method string getResultType()
 * @method $this setResultSample($resultSample)
 * @method string getResultSample()
 * @method $this setServiceProtocol($serviceProtocol)
 * @method string getServiceProtocol()
 * @method $this setServiceAddress($serviceAddress)
 * @method string getServiceAddress()
 * @method $this setServiceTimeout($serviceTimeout)
 * @method int getServiceTimeout()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setSystemParameters($systemParameters)
 * @method string getSystemParameters()
 * @method $this setConstantParameters($constantParameters)
 * @method string getConstantParameters()
 * @method $this setPathParameters($pathParameters)
 * @method string getPathParameters()
 * @method $this setRequestHeaders($requestHeaders)
 * @method string getRequestHeaders()
 * @method $this setRequestQueries($requestQueries)
 * @method string getRequestQueries()
 * @method $this setRequestBody($requestBody)
 * @method string getRequestBody()
 */
class CreateApi extends Request
{

}/**
 * @method $this setOriginalVip($originalVip)
 * @method string getOriginalVip()
 * @method $this setNewVip($newVip)
 * @method string getNewVip()
 */
class VipMigration extends Request
{

}/**
 * @method $this setAppCode($appCode)
 * @method string getAppCode()
 */
class ResetAppCode extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApiDocs extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class SetAccessPermissionByApis extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeUserWhiteLists extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 * @method $this setSource($source)
 * @method string getSource()
 */
class RemoveAccessPermissionByAppsForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBodyFormat($bodyFormat)
 * @method string getBodyFormat()
 * @method $this setPostBodyType($postBodyType)
 * @method string getPostBodyType()
 * @method $this setPostBodyDescription($postBodyDescription)
 * @method string getPostBodyDescription()
 * @method $this setHttpMethod($httpMethod)
 * @method string getHttpMethod()
 * @method $this setHttpProtocol($httpProtocol)
 * @method string getHttpProtocol()
 * @method $this setResultType($resultType)
 * @method string getResultType()
 * @method $this setResultSample($resultSample)
 * @method string getResultSample()
 * @method $this setServiceProtocol($serviceProtocol)
 * @method string getServiceProtocol()
 * @method $this setServiceAddress($serviceAddress)
 * @method string getServiceAddress()
 * @method $this setServiceTimeout($serviceTimeout)
 * @method int getServiceTimeout()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setSystemParameters($systemParameters)
 * @method string getSystemParameters()
 * @method $this setConstantParameters($constantParameters)
 * @method string getConstantParameters()
 * @method $this setPathParameters($pathParameters)
 * @method string getPathParameters()
 * @method $this setRequestHeaders($requestHeaders)
 * @method string getRequestHeaders()
 * @method $this setRequestQueries($requestQueries)
 * @method string getRequestQueries()
 * @method $this setRequestBody($requestBody)
 * @method string getRequestBody()
 */
class ModifyApi extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DeleteApi extends Request
{

}/**
 * @method $this setInvokeParams($invokeParams)
 * @method string getInvokeParams()
 */
class UpdateConsumerOpenInvokeTimesNow extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setVisibility($visibility)
 * @method string getVisibility()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setRequestConfig($requestConfig)
 * @method string getRequestConfig()
 * @method $this setServiceConfig($serviceConfig)
 * @method string getServiceConfig()
 * @method $this setRequestParamters($requestParamters)
 * @method string getRequestParamters()
 * @method $this setServiceParameters($serviceParameters)
 * @method string getServiceParameters()
 * @method $this setServiceParametersMap($serviceParametersMap)
 * @method string getServiceParametersMap()
 * @method $this setResultType($resultType)
 * @method string getResultType()
 * @method $this setResultSample($resultSample)
 * @method string getResultSample()
 */
class ModifyApiForInner extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class CheckAccountForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomain extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DescribeApiForBackend extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class DescribeHistoryApi extends Request
{

}/**
 * @method $this setBlackType($blackType)
 * @method string getBlackType()
 */
class RemoveAllBlackList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApiGroups extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteDomain extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class DeployApiForInner extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDeployedApis extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertificateName($certificateName)
 * @method string getCertificateName()
 * @method $this setCertificateBody($certificateBody)
 * @method string getCertificateBody()
 * @method $this setPrivateKey($privateKey)
 * @method string getPrivateKey()
 */
class SetDomain extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class RefreshDomain extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class RecoveryApiFromHistorical extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class DescribeDeployedApiForBackend extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class RemoveAccessPermissionByApis extends Request
{

}/**
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setCacheNamespace($cacheNamespace)
 * @method string getCacheNamespace()
 * @method $this setCacheKey($cacheKey)
 * @method string getCacheKey()
 */
class ClearCacheForBackend extends Request
{

}/**
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 */
class DeleteTrafficControl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 */
class DescribeAppSecurities extends Request
{

}/**
 * @method $this setBillingStatus($billingStatus)
 * @method string getBillingStatus()
 * @method $this setIllegalStatus($illegalStatus)
 * @method string getIllegalStatus()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class ModifyGroupStatusForBackend extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DescribeApiDoc extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeApisByRule extends Request
{

}/**
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeApiTraffic extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class DescribeBidByUserIdForInner extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainStatus($domainStatus)
 * @method string getDomainStatus()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setBitValue($bitValue)
 * @method string getBitValue()
 */
class ModifyDomainStatusForBackend extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 */
class RemoveAccessPermissionByApps extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAddressPoolId($addressPoolId)
 * @method string getAddressPoolId()
 * @method $this setServerIp($serverIp)
 * @method string getServerIp()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcAddAppServer extends Request
{

}/**
 * @method $this setAoneAppName($aoneAppName)
 * @method string getAoneAppName()
 */
class CheckAoneAppAudit extends Request
{

}/**
 * @method $this setAppCode($appCode)
 * @method string getAppCode()
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class ResetAppCodeForInner extends Request
{

}