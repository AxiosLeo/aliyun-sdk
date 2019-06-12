<?php

namespace aliyun\sdk\services\CloudAPI20160701;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160701
 *
 * @package aliyun\sdk\services\CloudAPI20160701
 * @method ModifyLogConfig ModifyLogConfig()
 * @method DeleteDomainCertificate DeleteDomainCertificate()
 * @method DescribeApiError DescribeApiError()
 * @method ImportSwagger ImportSwagger()
 * @method DescribeSystemParameters DescribeSystemParameters()
 * @method DeleteAllTrafficSpecialControl DeleteAllTrafficSpecialControl()
 * @method ResetAppKeySecret ResetAppKeySecret()
 * @method RecoveryApiDefineFromHistorical RecoveryApiDefineFromHistorical()
 * @method SetIpControlApis SetIpControlApis()
 * @method DeleteTrafficSpecialControl DeleteTrafficSpecialControl()
 * @method DescribeApiStageDetail DescribeApiStageDetail()
 * @method DeleteSecretKey DeleteSecretKey()
 * @method AbolishApi AbolishApi()
 * @method VpcModifyAccess VpcModifyAccess()
 * @method ModifyTrafficControl ModifyTrafficControl()
 * @method DeleteLogConfig DeleteLogConfig()
 * @method DescribeTrafficControls DescribeTrafficControls()
 * @method CreateCustomizedInfo CreateCustomizedInfo()
 * @method AddIpControlPolicyItem AddIpControlPolicyItem()
 * @method AddTrafficSpecialControl AddTrafficSpecialControl()
 * @method SetMockIntegration SetMockIntegration()
 * @method DescribeApis DescribeApis()
 * @method CreateIntranetDomain CreateIntranetDomain()
 * @method DescribeAppsByApi DescribeAppsByApi()
 * @method DescribeApps DescribeApps()
 * @method DescribeApiIpControls DescribeApiIpControls()
 * @method ModifySecretKey ModifySecretKey()
 * @method DescribeHistoryApis DescribeHistoryApis()
 * @method DescribeRulesByApi DescribeRulesByApi()
 * @method CreateApp CreateApp()
 * @method CreateTrafficControl CreateTrafficControl()
 * @method DeployApi DeployApi()
 * @method DeleteApiGroup DeleteApiGroup()
 * @method DescribeIpControls DescribeIpControls()
 * @method SwitchApi SwitchApi()
 * @method SetAccessPermissions SetAccessPermissions()
 * @method CreateApiGroup CreateApiGroup()
 * @method DeleteIpControl DeleteIpControl()
 * @method DescribePurchasedApiGroups DescribePurchasedApiGroups()
 * @method SdkGenerate SdkGenerate()
 * @method DeleteApp DeleteApp()
 * @method DescribeApisForConsole DescribeApisForConsole()
 * @method ModifyApp ModifyApp()
 * @method CreateRaceWorkForInner CreateRaceWorkForInner()
 * @method ModifyIpControlPolicyItem ModifyIpControlPolicyItem()
 * @method VpcRevokeAccess VpcRevokeAccess()
 * @method DescribePurchasedApis DescribePurchasedApis()
 * @method RecoverApiFromHistorical RecoverApiFromHistorical()
 * @method DescribeApi DescribeApi()
 * @method DescribePurchasedApi DescribePurchasedApi()
 * @method DescribeApiQps DescribeApiQps()
 * @method DescribeSecretKeys DescribeSecretKeys()
 * @method DescribeApiLatency DescribeApiLatency()
 * @method SdkGenerateByApp SdkGenerateByApp()
 * @method VpcGrantAccess VpcGrantAccess()
 * @method ModifyIpControl ModifyIpControl()
 * @method CreateInstance CreateInstance()
 * @method DescribePurchasedApiGroupDetail DescribePurchasedApiGroupDetail()
 * @method DescribeSystemParams DescribeSystemParams()
 * @method DescribeApp DescribeApp()
 * @method DescribeAppsForProvider DescribeAppsForProvider()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeApiRules DescribeApiRules()
 * @method SetDomainWebSocketStatus SetDomainWebSocketStatus()
 * @method CreateSecretKey CreateSecretKey()
 * @method RemoveBlackList RemoveBlackList()
 * @method RemoveApiRule RemoveApiRule()
 * @method DescribeBlackLists DescribeBlackLists()
 * @method SetApiRule SetApiRule()
 * @method DescribeApiGroupDetail DescribeApiGroupDetail()
 * @method DescribeIpControlPolicyItems DescribeIpControlPolicyItems()
 * @method ModifyApiGroup ModifyApiGroup()
 * @method DescribeLogConfig DescribeLogConfig()
 * @method DescribeApisByApp DescribeApisByApp()
 * @method SetDomainCertificate SetDomainCertificate()
 * @method DescribeDeployedApi DescribeDeployedApi()
 * @method AddBlackList AddBlackList()
 * @method DescribeAppSecurity DescribeAppSecurity()
 * @method DescribeDomainResolution DescribeDomainResolution()
 * @method DescribeRaceWorkForInner DescribeRaceWorkForInner()
 * @method SdkGenerateByGroup SdkGenerateByGroup()
 * @method CreateApi CreateApi()
 * @method DescribeApiDocs DescribeApiDocs()
 * @method SetAccessPermissionByApis SetAccessPermissionByApis()
 * @method DescribeApisByIpControl DescribeApisByIpControl()
 * @method ModifyApi ModifyApi()
 * @method ResetCustomized ResetCustomized()
 * @method DeleteApi DeleteApi()
 * @method CreateLogConfig CreateLogConfig()
 * @method CreateIpControl CreateIpControl()
 * @method GetApiMethods GetApiMethods()
 * @method DescribeDomain DescribeDomain()
 * @method DescribeHistoryApi DescribeHistoryApi()
 * @method GetCustomizedInfo GetCustomizedInfo()
 * @method RemoveAllBlackList RemoveAllBlackList()
 * @method ReactivateDomain ReactivateDomain()
 * @method DescribeApiGroups DescribeApiGroups()
 * @method DeleteDomain DeleteDomain()
 * @method DescribeDeployedApis DescribeDeployedApis()
 * @method SetDomain SetDomain()
 * @method DescribeApiGroupDetailForConsumer DescribeApiGroupDetailForConsumer()
 * @method RemoveIpControlApis RemoveIpControlApis()
 * @method RefreshDomain RefreshDomain()
 * @method DeleteApiStageVariable DeleteApiStageVariable()
 * @method RecoveryApiFromHistorical RecoveryApiFromHistorical()
 * @method RemoveAccessPermissionByApis RemoveAccessPermissionByApis()
 * @method DeleteTrafficControl DeleteTrafficControl()
 * @method RemoveIpControlPolicyItem RemoveIpControlPolicyItem()
 * @method DescribeAppSecurities DescribeAppSecurities()
 * @method DescribeApiDoc DescribeApiDoc()
 * @method CreateApiStageVariable CreateApiStageVariable()
 * @method DescribeApisByRule DescribeApisByRule()
 * @method DescribeApiTraffic DescribeApiTraffic()
 * @method VpcDescribeAccesses VpcDescribeAccesses()
 * @method RemoveAccessPermissionByApps RemoveAccessPermissionByApps()
 */
class V20160701
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSlsProject($slsProject)
 * @method string getSlsProject()
 * @method $this setSlsLogStore($slsLogStore)
 * @method string getSlsLogStore()
 * @method $this setLogType($logType)
 * @method string getLogType()
 */
class ModifyLogConfig extends Request
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
 * @method $this setOverwrite($overwrite)
 * @method bool getOverwrite()
 * @method $this setDataFormat($dataFormat)
 * @method string getDataFormat()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDryRun($dryRun)
 * @method bool getDryRun()
 */
class ImportSwagger extends Request
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
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class SetIpControlApis extends Request
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
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageId($stageId)
 * @method string getStageId()
 */
class DescribeApiStageDetail extends Request
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
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstancePort($instancePort)
 * @method string getInstancePort()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcModifyAccess extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLogType($logType)
 * @method string getLogType()
 */
class DeleteLogConfig extends Request
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
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setStageId($stageId)
 * @method string getStageId()
 * @method $this setJavaDemo($javaDemo)
 * @method string getJavaDemo()
 * @method $this setPythonDemo($pythonDemo)
 * @method string getPythonDemo()
 * @method $this setCsharpDemo($csharpDemo)
 * @method string getCsharpDemo()
 * @method $this setPhpDemo($phpDemo)
 * @method string getPhpDemo()
 * @method $this setObjectcDemo($objectcDemo)
 * @method string getObjectcDemo()
 * @method $this setCurlDemo($curlDemo)
 * @method string getCurlDemo()
 */
class CreateCustomizedInfo extends Request
{

}/**
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setCidrIp($cidrIp)
 * @method string getCidrIp()
 */
class AddIpControlPolicyItem extends Request
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
 * @method $this setDeleteInternetDomain($deleteInternetDomain)
 * @method bool getDeleteInternetDomain()
 */
class CreateIntranetDomain extends Request
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
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppOwnerId($appOwnerId)
 * @method int getAppOwnerId()
 */
class DescribeAppsByApi extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApps extends Request
{

}/**
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
class DescribeApiIpControls extends Request
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
 * @method $this setSupportMock($supportMock)
 * @method string getSupportMock()
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
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setIpControlName($ipControlName)
 * @method string getIpControlName()
 * @method $this setIpControlType($ipControlType)
 * @method string getIpControlType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeIpControls extends Request
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
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateApiGroup extends Request
{

}/**
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 */
class DeleteIpControl extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePurchasedApiGroups extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 */
class SdkGenerate extends Request
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
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setPolicyItemId($policyItemId)
 * @method string getPolicyItemId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setCidrIp($cidrIp)
 * @method string getCidrIp()
 */
class ModifyIpControlPolicyItem extends Request
{

}/**
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstancePort($instancePort)
 * @method string getInstancePort()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcRevokeAccess extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribePurchasedApis extends Request
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
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 */
class SdkGenerateByApp extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstancePort($instancePort)
 * @method string getInstancePort()
 * @method $this setToken($token)
 * @method string getToken()
 */
class VpcGrantAccess extends Request
{

}/**
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setIpControlName($ipControlName)
 * @method string getIpControlName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyIpControl extends Request
{

}/**
 * @method $this setSkuId($skuId)
 * @method string getSkuId()
 * @method $this setAccountQuantity($accountQuantity)
 * @method int getAccountQuantity()
 * @method $this setExpiredOn($expiredOn)
 * @method string getExpiredOn()
 * @method $this setToken($token)
 * @method string getToken()
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
 * @method $this setAppOwnerId($appOwnerId)
 * @method int getAppOwnerId()
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
 * @method $this setApiName($apiName)
 * @method string getApiName()
 */
class DescribeApiRules extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setActionValue($actionValue)
 * @method string getActionValue()
 */
class SetDomainWebSocketStatus extends Request
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
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setPolicyItemId($policyItemId)
 * @method string getPolicyItemId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeIpControlPolicyItems extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLogType($logType)
 * @method string getLogType()
 */
class DescribeLogConfig extends Request
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
 * @method $this setLanguage($language)
 * @method string getLanguage()
 */
class SdkGenerateByGroup extends Request
{

}/**
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
 * @method $this setFailResultSample($failResultSample)
 * @method string getFailResultSample()
 * @method $this setErrorCodeSamples($errorCodeSamples)
 * @method string getErrorCodeSamples()
 * @method $this setResultDescriptions($resultDescriptions)
 * @method string getResultDescriptions()
 * @method $this setOpenIdConnectConfig($openIdConnectConfig)
 * @method string getOpenIdConnectConfig()
 * @method $this setAllowSignatureMethod($allowSignatureMethod)
 * @method string getAllowSignatureMethod()
 * @method $this setWebSocketApiType($webSocketApiType)
 * @method string getWebSocketApiType()
 * @method $this setResultBodyModel($resultBodyModel)
 * @method string getResultBodyModel()
 * @method $this setForceNonceCheck($forceNonceCheck)
 * @method bool getForceNonceCheck()
 * @method $this setDisableInternet($disableInternet)
 * @method bool getDisableInternet()
 */
class CreateApi extends Request
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
 * @method $this setAuthVaildTime($authVaildTime)
 * @method string getAuthVaildTime()
 * @method $this setAuthValidTime($authValidTime)
 * @method string getAuthValidTime()
 */
class SetAccessPermissionByApis extends Request
{

}/**
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeApisByIpControl extends Request
{

}/**
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
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
 * @method $this setFailResultSample($failResultSample)
 * @method string getFailResultSample()
 * @method $this setErrorCodeSamples($errorCodeSamples)
 * @method string getErrorCodeSamples()
 * @method $this setResultDescriptions($resultDescriptions)
 * @method string getResultDescriptions()
 * @method $this setOpenIdConnectConfig($openIdConnectConfig)
 * @method string getOpenIdConnectConfig()
 * @method $this setAllowSignatureMethod($allowSignatureMethod)
 * @method string getAllowSignatureMethod()
 * @method $this setWebSocketApiType($webSocketApiType)
 * @method string getWebSocketApiType()
 * @method $this setResultBodyModel($resultBodyModel)
 * @method string getResultBodyModel()
 * @method $this setForceNonceCheck($forceNonceCheck)
 * @method bool getForceNonceCheck()
 * @method $this setDisableInternet($disableInternet)
 * @method bool getDisableInternet()
 */
class ModifyApi extends Request
{

}/**
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setStageId($stageId)
 * @method string getStageId()
 */
class ResetCustomized extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSlsProject($slsProject)
 * @method string getSlsProject()
 * @method $this setSlsLogStore($slsLogStore)
 * @method string getSlsLogStore()
 * @method $this setLogType($logType)
 * @method string getLogType()
 */
class CreateLogConfig extends Request
{

}/**
 * @method $this setIpControlName($ipControlName)
 * @method string getIpControlName()
 * @method $this setIpControlType($ipControlType)
 * @method string getIpControlType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setIpControlPolicys($ipControlPolicys)
 * @method array getIpControlPolicys()
 */
class CreateIpControl extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiPath($apiPath)
 * @method string getApiPath()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class GetApiMethods extends Request
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
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 */
class DescribeHistoryApi extends Request
{

}/**
 * @method $this setApiName($apiName)
 * @method string getApiName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setStageId($stageId)
 * @method string getStageId()
 */
class GetCustomizedInfo extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ReactivateDomain extends Request
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
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setApiId($apiId)
 * @method string getApiId()
 */
class DescribeApiGroupDetailForConsumer extends Request
{

}/**
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setApiIds($apiIds)
 * @method string getApiIds()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class RemoveIpControlApis extends Request
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
 * @method $this setStageId($stageId)
 * @method string getStageId()
 * @method $this setVariableName($variableName)
 * @method string getVariableName()
 */
class DeleteApiStageVariable extends Request
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
 * @method $this setTrafficControlId($trafficControlId)
 * @method string getTrafficControlId()
 */
class DeleteTrafficControl extends Request
{

}/**
 * @method $this setIpControlId($ipControlId)
 * @method string getIpControlId()
 * @method $this setPolicyItemIds($policyItemIds)
 * @method string getPolicyItemIds()
 */
class RemoveIpControlPolicyItem extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 */
class DescribeAppSecurities extends Request
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
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStageId($stageId)
 * @method string getStageId()
 * @method $this setVariableName($variableName)
 * @method string getVariableName()
 * @method $this setSupportRoute($supportRoute)
 * @method bool getSupportRoute()
 * @method $this setVariableValue($variableValue)
 * @method string getVariableValue()
 * @method $this setStageRouteModel($stageRouteModel)
 * @method string getStageRouteModel()
 */
class CreateApiStageVariable extends Request
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
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstancePort($instancePort)
 * @method string getInstancePort()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class VpcDescribeAccesses extends Request
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

}