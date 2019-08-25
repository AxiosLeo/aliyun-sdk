<?php

namespace aliyun\sdk\services\Cloudwf20170328;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170328
 *
 * @package aliyun\sdk\services\Cloudwf20170328
 * @method ApgroupBatchDeleteAp ApgroupBatchDeleteAp()
 * @method SetScanMode SetScanMode()
 * @method HeadquartersToolsO2O HeadquartersToolsO2O()
 * @method ProduceInstance ProduceInstance()
 * @method AreaInfo AreaInfo()
 * @method ListConfigByAction ListConfigByAction()
 * @method ReportHour ReportHour()
 * @method ProfileHistoryList ProfileHistoryList()
 * @method UpgradeAPGroup UpgradeAPGroup()
 * @method GetSubAccountStatus GetSubAccountStatus()
 * @method SavePortalTemplate SavePortalTemplate()
 * @method DeviceBatchCreate DeviceBatchCreate()
 * @method InnerProduceCloudWF InnerProduceCloudWF()
 * @method ResetAp ResetAp()
 * @method ProfileBase ProfileBase()
 * @method SavePageConfigTemplate SavePageConfigTemplate()
 * @method GetSidsAndGids4Bid GetSidsAndGids4Bid()
 * @method ShopUpdate ShopUpdate()
 * @method GetInstanceByShop GetInstanceByShop()
 * @method GetApTop GetApTop()
 * @method PeripheryAnalyse PeripheryAnalyse()
 * @method GetCrowdList GetCrowdList()
 * @method SaveApPortalConfig SaveApPortalConfig()
 * @method OemFlowrateMonitor OemFlowrateMonitor()
 * @method ReportZoneDay ReportZoneDay()
 * @method BusinessInfo BusinessInfo()
 * @method GetOnlineStaTimeSer GetOnlineStaTimeSer()
 * @method OemFlowrateAnalyse OemFlowrateAnalyse()
 * @method OemFlowrateOverview OemFlowrateOverview()
 * @method SendCommandByMac SendCommandByMac()
 * @method ReportRealtime ReportRealtime()
 * @method GetGroupApRadioConfigProgress GetGroupApRadioConfigProgress()
 * @method UserDataUpdate UserDataUpdate()
 * @method HeadquartersOverview HeadquartersOverview()
 * @method ShopGroupCreate ShopGroupCreate()
 * @method GetUmengPagePermission4Root GetUmengPagePermission4Root()
 * @method ShopOverview ShopOverview()
 * @method GetApgroupSsidConfigProgress GetApgroupSsidConfigProgress()
 * @method GetApStaMiscAgg GetApStaMiscAgg()
 * @method DelSubAccountPermission DelSubAccountPermission()
 * @method GetPageConfigTemplate GetPageConfigTemplate()
 * @method ApgroupBatchAddAp ApgroupBatchAddAp()
 * @method SaveApConfig SaveApConfig()
 * @method GroupDetails GroupDetails()
 * @method AreaDelete AreaDelete()
 * @method ProfileConsume ProfileConsume()
 * @method UserDataShowList UserDataShowList()
 * @method OemSitingContrast OemSitingContrast()
 * @method GetApPortalBind GetApPortalBind()
 * @method GetUpgradeImg GetUpgradeImg()
 * @method DeviceDelete DeviceDelete()
 * @method ListApgroupConfig ListApgroupConfig()
 * @method GetBindAp4Umeng GetBindAp4Umeng()
 * @method AddApgroupConfig AddApgroupConfig()
 * @method ShopGetfiltermac ShopGetfiltermac()
 * @method UserAnalyse UserAnalyse()
 * @method GetScanProbeTimeSer GetScanProbeTimeSer()
 * @method OemHeatLine OemHeatLine()
 * @method ShopGroupUpdate ShopGroupUpdate()
 * @method ListGroupApBriefConfig ListGroupApBriefConfig()
 * @method ShopDeletemarketing ShopDeletemarketing()
 * @method GetPortalTempDetail GetPortalTempDetail()
 * @method BusinessShowList BusinessShowList()
 * @method GetApDetailedStatus GetApDetailedStatus()
 * @method ListStaOnoffLog ListStaOnoffLog()
 * @method AliyunRegisterApAsset AliyunRegisterApAsset()
 * @method ListApAsset ListApAsset()
 * @method GetLatestApStatistic GetLatestApStatistic()
 * @method QueryRenewPrice QueryRenewPrice()
 * @method ProfileHistory ProfileHistory()
 * @method ListBusinessDetails ListBusinessDetails()
 * @method InnerCheckOrder InnerCheckOrder()
 * @method ShopMarketingList ShopMarketingList()
 * @method ProfileDistrict ProfileDistrict()
 * @method SaveApScanConfig SaveApScanConfig()
 * @method GetGroupApChangeNameTemplate GetGroupApChangeNameTemplate()
 * @method GetStaTop GetStaTop()
 * @method GetLatestStaStatistic GetLatestStaStatistic()
 * @method ListApRadioStatus ListApRadioStatus()
 * @method GetSubAccountPermission GetSubAccountPermission()
 * @method RepairAp RepairAp()
 * @method ListBriefApConfig ListBriefApConfig()
 * @method GetUpgradeAPProgress GetUpgradeAPProgress()
 * @method ShopShowList ShopShowList()
 * @method HeadquartersRanking HeadquartersRanking()
 * @method ShopCreate ShopCreate()
 * @method GetApgroupScanConfigSaveProgress GetApgroupScanConfigSaveProgress()
 * @method ListStaStatus ListStaStatus()
 * @method GroupTrend GroupTrend()
 * @method ShopGroupShowList ShopGroupShowList()
 * @method CheckUmengDataAnalysisPermission CheckUmengDataAnalysisPermission()
 * @method releaseInstance releaseInstance()
 * @method ResetApConfig ResetApConfig()
 * @method GetGroupApRepairProgress GetGroupApRepairProgress()
 * @method OemHeatSetting OemHeatSetting()
 * @method SaveApgroupConfig SaveApgroupConfig()
 * @method HeadquartersToolsContrast HeadquartersToolsContrast()
 * @method UserDataCreate UserDataCreate()
 * @method GetApgroupConfigProgress GetApgroupConfigProgress()
 * @method HeadquartersToolsCoincide HeadquartersToolsCoincide()
 * @method GetUpgradeAPGroupProgress GetUpgradeAPGroupProgress()
 * @method ProfileMedia ProfileMedia()
 * @method ReportDay ReportDay()
 * @method ResumeInstance ResumeInstance()
 * @method ShopActionCustome ShopActionCustome()
 * @method AreaUpdate AreaUpdate()
 * @method ListProbeinfo ListProbeinfo()
 * @method ListAccountConfig ListAccountConfig()
 * @method GetBatchSaveApAssetProgress GetBatchSaveApAssetProgress()
 * @method ListPageConfigTemplate ListPageConfigTemplate()
 * @method ListApPosition ListApPosition()
 * @method OnoffGroupApRadio OnoffGroupApRadio()
 * @method DeleteApgroupSsidConfig DeleteApgroupSsidConfig()
 * @method GroupOverview GroupOverview()
 * @method ListApPositionMap ListApPositionMap()
 * @method InnerRefund InnerRefund()
 * @method ShopActionReturning ShopActionReturning()
 * @method DelApPosition DelApPosition()
 * @method GetOssServerSign GetOssServerSign()
 * @method DeviceShowList DeviceShowList()
 * @method FindAp FindAp()
 * @method BusinessUpdate BusinessUpdate()
 * @method DeleteApgroupConfig DeleteApgroupConfig()
 * @method FrequencyAnalyse FrequencyAnalyse()
 * @method ListApUpgrade ListApUpgrade()
 * @method OemFlowrateRanking OemFlowrateRanking()
 * @method UpLoadMap UpLoadMap()
 * @method ListUmengPagePermission4Root ListUmengPagePermission4Root()
 * @method GetAllActiveShopByGroup GetAllActiveShopByGroup()
 * @method GetProbeDataSubscriberConfig GetProbeDataSubscriberConfig()
 * @method DeviceUpdate DeviceUpdate()
 * @method AreaShowList AreaShowList()
 * @method ShopGetredress ShopGetredress()
 * @method DeletePositionMap DeletePositionMap()
 * @method GetStaDetailedStatus GetStaDetailedStatus()
 * @method SetUpgradeImgByModel SetUpgradeImgByModel()
 * @method GroupIntime GroupIntime()
 * @method CreateSubAccountPermission CreateSubAccountPermission()
 * @method GetAllApModel GetAllApModel()
 * @method OemMarketingCustomer OemMarketingCustomer()
 * @method ListBriefConfigByAction ListBriefConfigByAction()
 * @method GetMapUrl GetMapUrl()
 * @method RepairGroupAp RepairGroupAp()
 * @method ListSubAccountPermission ListSubAccountPermission()
 * @method SavePortalConfig SavePortalConfig()
 * @method GetApDetailedConfig GetApDetailedConfig()
 * @method GetApgroupPortalConfigProgress GetApgroupPortalConfigProgress()
 * @method GetApRunHistoryTimeSer GetApRunHistoryTimeSer()
 * @method SaveApMapInfo SaveApMapInfo()
 * @method GetGroupApRadioOnoffProgress GetGroupApRadioOnoffProgress()
 * @method KickAndClearPMKcache KickAndClearPMKcache()
 * @method ProfileTrade ProfileTrade()
 * @method OemSitingSelction OemSitingSelction()
 * @method KickSta KickSta()
 * @method SaveApRadioSsidConfig SaveApRadioSsidConfig()
 * @method UserDataDelete UserDataDelete()
 * @method ShopDelete ShopDelete()
 * @method GetOnlineApTimeSer GetOnlineApTimeSer()
 * @method PutOssFile PutOssFile()
 * @method GetDailyStatistic GetDailyStatistic()
 * @method ConfigAutoRenew ConfigAutoRenew()
 * @method OemHeatMap OemHeatMap()
 * @method HeadquartersTrend HeadquartersTrend()
 * @method GetApgroupDetailedConfig GetApgroupDetailedConfig()
 * @method ExcelToJson ExcelToJson()
 * @method CheckRootPermission CheckRootPermission()
 * @method SaveApRadioConfig SaveApRadioConfig()
 * @method ShopDataAlarm ShopDataAlarm()
 * @method SaveAccountConfig SaveAccountConfig()
 * @method DeleteApRadioSsidConfig DeleteApRadioSsidConfig()
 * @method ShopSetfiltermac ShopSetfiltermac()
 * @method OemMarketingSettingData OemMarketingSettingData()
 * @method ListApAssetCanBeAdded ListApAssetCanBeAdded()
 * @method GetGroupApRadioConfigTemplate GetGroupApRadioConfigTemplate()
 * @method GetBids4Uid4Root GetBids4Uid4Root()
 * @method GetRadioRunHistoryTimeSer GetRadioRunHistoryTimeSer()
 * @method SaveUmengPagePermission4Root SaveUmengPagePermission4Root()
 * @method ListBusinesses ListBusinesses()
 * @method ModifySubAccountPermission ModifySubAccountPermission()
 * @method ProfileTag ProfileTag()
 * @method ListUpgradeImg ListUpgradeImg()
 * @method ListApPositionStatus ListApPositionStatus()
 * @method SaveStaStatus SaveStaStatus()
 * @method ListApStatus ListApStatus()
 * @method ReportMinute ReportMinute()
 * @method ListApDetailInfo ListApDetailInfo()
 * @method ShopCreatemarketing ShopCreatemarketing()
 * @method DelPageConfigTemplate DelPageConfigTemplate()
 * @method CeaseInstance CeaseInstance()
 * @method SaveProbeDataSubscriber SaveProbeDataSubscriber()
 * @method DelPortalTemp DelPortalTemp()
 * @method AreaCreate AreaCreate()
 * @method ReportZoneMinute ReportZoneMinute()
 * @method UpgradeAP UpgradeAP()
 * @method GetSendCommandByMacProgress GetSendCommandByMacProgress()
 * @method GetPageProperties GetPageProperties()
 * @method ShopCamera ShopCamera()
 * @method DelUmengPagePermission4Root DelUmengPagePermission4Root()
 * @method ShopSetredress ShopSetredress()
 * @method GetDeviceInfoByMac GetDeviceInfoByMac()
 * @method ShopGroupDelete ShopGroupDelete()
 * @method GetAccountConfig GetAccountConfig()
 * @method BatchRegisterApAsset BatchRegisterApAsset()
 * @method SaveGroupApRadioConfig SaveGroupApRadioConfig()
 * @method OemMarketingPotential OemMarketingPotential()
 * @method GetUserUmengPagePermission GetUserUmengPagePermission()
 * @method BusinessCreate BusinessCreate()
 * @method BatchChangeGroupApName BatchChangeGroupApName()
 * @method GetScanMode GetScanMode()
 * @method SaveApgroupSsidConfig SaveApgroupSsidConfig()
 * @method ListApStaStatus ListApStaStatus()
 * @method OemFlowrateIntelligent OemFlowrateIntelligent()
 * @method ReportZoneHour ReportZoneHour()
 * @method GetAddApsProgress GetAddApsProgress()
 * @method ShopGroupInfo ShopGroupInfo()
 * @method SaveApgroupScanConfig SaveApgroupScanConfig()
 * @method ReportZoneRealtime ReportZoneRealtime()
 * @method CreateRenewOrder CreateRenewOrder()
 * @method ShopInfo ShopInfo()
 * @method ListPortalTemplate ListPortalTemplate()
 * @method GetBid GetBid()
 * @method BatchSaveApPosition BatchSaveApPosition()
 * @method DeviceCreate DeviceCreate()
 * @method GetStaRunHistoryTimeSer GetStaRunHistoryTimeSer()
 */
class V20170328
{
}

/**
 * @method $this setApAssetIds($apAssetIds)
 * @method string getApAssetIds()
 */
class ApgroupBatchDeleteAp extends Request
{
}/**
 * @method $this setOperation($operation)
 * @method int getOperation()
 * @method $this setMacList($macList)
 * @method array getMacList()
 */
class SetScanMode extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class HeadquartersToolsO2O extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setProduceParameter($produceParameter)
 * @method string getProduceParameter()
 */
class ProduceInstance extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setAid($aid)
 * @method int getAid()
 */
class AreaInfo extends Request
{
}/**
 * @method $this setActionName($actionName)
 * @method string getActionName()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 */
class ListConfigByAction extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ReportHour extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setIdtype($idtype)
 * @method int getIdtype()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 */
class ProfileHistoryList extends Request
{
}/**
 * @method $this setIds($ids)
 * @method array getIds()
 */
class UpgradeAPGroup extends Request
{
}/**
 */
class GetSubAccountStatus extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTempName($tempName)
 * @method string getTempName()
 * @method $this setOssFileId($ossFileId)
 * @method int getOssFileId()
 * @method $this setTextAlign($textAlign)
 * @method string getTextAlign()
 * @method $this setTextColor($textColor)
 * @method string getTextColor()
 * @method $this setTextContent($textContent)
 * @method string getTextContent()
 */
class SavePortalTemplate extends Request
{
}/**
 * @method $this setSn($sn)
 * @method string getSn()
 * @method $this setDeviceType($deviceType)
 * @method int getDeviceType()
 */
class DeviceBatchCreate extends Request
{
}/**
 * @method $this setdata($data)
 * @method string getdata()
 */
class InnerProduceCloudWF extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class ResetAp extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ProfileBase extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTempName($tempName)
 * @method string getTempName()
 * @method $this setTempDesc($tempDesc)
 * @method string getTempDesc()
 * @method $this setTempType($tempType)
 * @method int getTempType()
 * @method $this setTempPermission($tempPermission)
 * @method string getTempPermission()
 */
class SavePageConfigTemplate extends Request
{
}/**
 * @method $this setQueryId($queryId)
 * @method int getQueryId()
 * @method $this setQueryType($queryType)
 * @method int getQueryType()
 */
class GetSidsAndGids4Bid extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setShopName($shopName)
 * @method string getShopName()
 * @method $this setShopTopType($shopTopType)
 * @method int getShopTopType()
 * @method $this setShopType($shopType)
 * @method int getShopType()
 * @method $this setShopSubtype($shopSubtype)
 * @method int getShopSubtype()
 * @method $this setShopArea($shopArea)
 * @method int getShopArea()
 * @method $this setShopManager($shopManager)
 * @method string getShopManager()
 * @method $this setShopTel($shopTel)
 * @method string getShopTel()
 * @method $this setShopProvince($shopProvince)
 * @method string getShopProvince()
 * @method $this setShopCity($shopCity)
 * @method string getShopCity()
 * @method $this setShopAddress($shopAddress)
 * @method string getShopAddress()
 * @method $this setShopBusinessHours($shopBusinessHours)
 * @method string getShopBusinessHours()
 * @method $this setShopCoordinate($shopCoordinate)
 * @method string getShopCoordinate()
 * @method $this setShopBrand($shopBrand)
 * @method string getShopBrand()
 * @method $this setShopRemarks($shopRemarks)
 * @method string getShopRemarks()
 * @method $this setWarn($warn)
 * @method int getWarn()
 * @method $this setWarnEmail($warnEmail)
 * @method string getWarnEmail()
 * @method $this setWarnpHone($warnpHone)
 * @method string getWarnpHone()
 * @method $this setShopCloseWarn($shopCloseWarn)
 * @method int getShopCloseWarn()
 */
class ShopUpdate extends Request
{
}/**
 * @method $this setShopId($shopId)
 * @method int getShopId()
 */
class GetInstanceByShop extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class GetApTop extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class PeripheryAnalyse extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 * @method $this setClassType($classType)
 * @method int getClassType()
 * @method $this setGsType($gsType)
 * @method string getGsType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setBid($bid)
 * @method int getBid()
 */
class GetCrowdList extends Request
{
}/**
 * @method $this setPortalStatus($portalStatus)
 * @method bool getPortalStatus()
 * @method $this setPortalUrl($portalUrl)
 * @method string getPortalUrl()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setAuthSecret($authSecret)
 * @method string getAuthSecret()
 * @method $this setWebAuthUrl($webAuthUrl)
 * @method string getWebAuthUrl()
 * @method $this setWhitelist($whitelist)
 * @method string getWhitelist()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setNetwork($network)
 * @method int getNetwork()
 * @method $this setApConfigId($apConfigId)
 * @method int getApConfigId()
 */
class SaveApPortalConfig extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class OemFlowrateMonitor extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ReportZoneDay extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class BusinessInfo extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setCompanyId($companyId)
 * @method int getCompanyId()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setEnd($end)
 * @method int getEnd()
 * @method $this setZoomStart($zoomStart)
 * @method int getZoomStart()
 * @method $this setZoomEnd($zoomEnd)
 * @method int getZoomEnd()
 */
class GetOnlineStaTimeSer extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class OemFlowrateAnalyse extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemFlowrateOverview extends Request
{
}/**
 * @method $this setMacList($macList)
 * @method array getMacList()
 * @method $this setCommand($command)
 * @method string getCommand()
 */
class SendCommandByMac extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 */
class ReportRealtime extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetGroupApRadioConfigProgress extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setIid($iid)
 * @method int getIid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUploadFile($uploadFile)
 * @method string getUploadFile()
 */
class UserDataUpdate extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class HeadquartersOverview extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setShopIds($shopIds)
 * @method string getShopIds()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ShopGroupCreate extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetUmengPagePermission4Root extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class ShopOverview extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApgroupSsidConfigProgress extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class GetApStaMiscAgg extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DelSubAccountPermission extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetPageConfigTemplate extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setApAssetIds($apAssetIds)
 * @method string getApAssetIds()
 */
class ApgroupBatchAddAp extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEchoInt($echoInt)
 * @method int getEchoInt()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setDai($dai)
 * @method string getDai()
 * @method $this setLogIp($logIp)
 * @method string getLogIp()
 * @method $this setLogLevel($logLevel)
 * @method int getLogLevel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setApAssetId($apAssetId)
 * @method int getApAssetId()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setScan($scan)
 * @method int getScan()
 */
class SaveApConfig extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class GroupDetails extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setAid($aid)
 * @method int getAid()
 */
class AreaDelete extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ProfileConsume extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setIid($iid)
 * @method int getIid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 */
class UserDataShowList extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemSitingContrast extends Request
{
}/**
 * @method $this setBindId($bindId)
 * @method int getBindId()
 * @method $this setConfigType($configType)
 * @method int getConfigType()
 */
class GetApPortalBind extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetUpgradeImg extends Request
{
}/**
 * @method $this setDid($did)
 * @method int getDid()
 * @method $this setMac($mac)
 * @method string getMac()
 */
class DeviceDelete extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchCompany($searchCompany)
 * @method string getSearchCompany()
 */
class ListApgroupConfig extends Request
{
}/**
 */
class GetBindAp4Umeng extends Request
{
}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setParentApgroupId($parentApgroupId)
 * @method int getParentApgroupId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class AddApgroupConfig extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 */
class ShopGetfiltermac extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class UserAnalyse extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setCompanyId($companyId)
 * @method int getCompanyId()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setEnd($end)
 * @method int getEnd()
 * @method $this setZoomStart($zoomStart)
 * @method int getZoomStart()
 * @method $this setZoomEnd($zoomEnd)
 * @method int getZoomEnd()
 */
class GetScanProbeTimeSer extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class OemHeatLine extends Request
{
}/**
 * @method $this setGid($gid)
 * @method int getGid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setShopIds($shopIds)
 * @method string getShopIds()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ShopGroupUpdate extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setColCnt($colCnt)
 * @method int getColCnt()
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 */
class ListGroupApBriefConfig extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setId($id)
 * @method int getId()
 */
class ShopDeletemarketing extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setUniqueId($uniqueId)
 * @method string getUniqueId()
 */
class GetPortalTempDetail extends Request
{
}/**
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 */
class BusinessShowList extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApDetailedStatus extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setSearchApName($searchApName)
 * @method string getSearchApName()
 * @method $this setSearchSsid($searchSsid)
 * @method string getSearchSsid()
 * @method $this setSearchUsername($searchUsername)
 * @method string getSearchUsername()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListStaOnoffLog extends Request
{
}/**
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setSerialNo($serialNo)
 * @method string getSerialNo()
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class AliyunRegisterApAsset extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchSerialNo($searchSerialNo)
 * @method string getSearchSerialNo()
 * @method $this setSearchModel($searchModel)
 * @method string getSearchModel()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 */
class ListApAsset extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class GetLatestApStatistic extends Request
{
}/**
 * @method $this setApList($apList)
 * @method array getApList()
 * @method $this setTimeCycleNum($timeCycleNum)
 * @method int getTimeCycleNum()
 */
class QueryRenewPrice extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setIdtype($idtype)
 * @method int getIdtype()
 * @method $this setBeginMonth($beginMonth)
 * @method string getBeginMonth()
 * @method $this setEndMonth($endMonth)
 * @method string getEndMonth()
 */
class ProfileHistory extends Request
{
}/**
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListBusinessDetails extends Request
{
}/**
 * @method $this setdata($data)
 * @method string getdata()
 */
class InnerCheckOrder extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 */
class ShopMarketingList extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ProfileDistrict extends Request
{
}/**
 * @method $this setApConfigId($apConfigId)
 * @method int getApConfigId()
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SaveApScanConfig extends Request
{
}/**
 */
class GetGroupApChangeNameTemplate extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class GetStaTop extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class GetLatestStaStatistic extends Request
{
}/**
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchApgroupName($searchApgroupName)
 * @method string getSearchApgroupName()
 * @method $this setSearchChannelEquals($searchChannelEquals)
 * @method int getSearchChannelEquals()
 * @method $this setSearchApStatus($searchApStatus)
 * @method int getSearchApStatus()
 * @method $this setSearchDisabled($searchDisabled)
 * @method int getSearchDisabled()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListApRadioStatus extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetSubAccountPermission extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class RepairAp extends Request
{
}/**
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchScan($searchScan)
 * @method int getSearchScan()
 * @method $this setSearchModel($searchModel)
 * @method string getSearchModel()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListBriefApConfig extends Request
{
}/**
 */
class GetUpgradeAPProgress extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 * @method $this setGid($gid)
 * @method int getGid()
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setDirc($dirc)
 * @method string getDirc()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setShopStatus($shopStatus)
 * @method int getShopStatus()
 */
class ShopShowList extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class HeadquartersRanking extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setShopName($shopName)
 * @method string getShopName()
 * @method $this setShopTopType($shopTopType)
 * @method int getShopTopType()
 * @method $this setShopType($shopType)
 * @method int getShopType()
 * @method $this setShopSubtype($shopSubtype)
 * @method int getShopSubtype()
 * @method $this setShopArea($shopArea)
 * @method int getShopArea()
 * @method $this setShopManager($shopManager)
 * @method string getShopManager()
 * @method $this setShopTel($shopTel)
 * @method string getShopTel()
 * @method $this setShopProvince($shopProvince)
 * @method string getShopProvince()
 * @method $this setShopCity($shopCity)
 * @method string getShopCity()
 * @method $this setShopAddress($shopAddress)
 * @method string getShopAddress()
 * @method $this setShopBusinessHours($shopBusinessHours)
 * @method string getShopBusinessHours()
 * @method $this setShopCoordinate($shopCoordinate)
 * @method string getShopCoordinate()
 * @method $this setShopBrand($shopBrand)
 * @method string getShopBrand()
 * @method $this setShopRemarks($shopRemarks)
 * @method string getShopRemarks()
 * @method $this setWarn($warn)
 * @method int getWarn()
 * @method $this setWarnEmail($warnEmail)
 * @method string getWarnEmail()
 * @method $this setWarnpHone($warnpHone)
 * @method string getWarnpHone()
 * @method $this setShopCloseWarn($shopCloseWarn)
 * @method int getShopCloseWarn()
 */
class ShopCreate extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApgroupScanConfigSaveProgress extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchIp($searchIp)
 * @method string getSearchIp()
 * @method $this setSearchProtocal($searchProtocal)
 * @method string getSearchProtocal()
 * @method $this setSearchSsid($searchSsid)
 * @method string getSearchSsid()
 * @method $this setSearchUsername($searchUsername)
 * @method string getSearchUsername()
 * @method $this setSearchApName($searchApName)
 * @method string getSearchApName()
 * @method $this setSearchGroupName($searchGroupName)
 * @method string getSearchGroupName()
 * @method $this setSearchStatus($searchStatus)
 * @method int getSearchStatus()
 * @method $this setSearchDescription($searchDescription)
 * @method string getSearchDescription()
 */
class ListStaStatus extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class GroupTrend extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 */
class ShopGroupShowList extends Request
{
}/**
 */
class CheckUmengDataAnalysisPermission extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setSpMsg($spMsg)
 * @method string getSpMsg()
 */
class releaseInstance extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class ResetApConfig extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetGroupApRepairProgress extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class OemHeatSetting extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEchoInt($echoInt)
 * @method int getEchoInt()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setDai($dai)
 * @method string getDai()
 * @method $this setLogIp($logIp)
 * @method string getLogIp()
 * @method $this setLogLevel($logLevel)
 * @method int getLogLevel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setScan($scan)
 * @method int getScan()
 */
class SaveApgroupConfig extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class HeadquartersToolsContrast extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setUploadFile($uploadFile)
 * @method string getUploadFile()
 */
class UserDataCreate extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApgroupConfigProgress extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class HeadquartersToolsCoincide extends Request
{
}/**
 */
class GetUpgradeAPGroupProgress extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ProfileMedia extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ReportDay extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setSpMsg($spMsg)
 * @method string getSpMsg()
 */
class ResumeInstance extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class ShopActionCustome extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setAid($aid)
 * @method int getAid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDids($dids)
 * @method string getDids()
 */
class AreaUpdate extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setSearchUserMac($searchUserMac)
 * @method string getSearchUserMac()
 * @method $this setSearchSensorName($searchSensorName)
 * @method string getSearchSensorName()
 * @method $this setSearchSensorMac($searchSensorMac)
 * @method string getSearchSensorMac()
 */
class ListProbeinfo extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setSearchEmail($searchEmail)
 * @method string getSearchEmail()
 */
class ListAccountConfig extends Request
{
}/**
 */
class GetBatchSaveApAssetProgress extends Request
{
}/**
 * @method $this setSearchTempName($searchTempName)
 * @method string getSearchTempName()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 */
class ListPageConfigTemplate extends Request
{
}/**
 * @method $this setMapId($mapId)
 * @method int getMapId()
 */
class ListApPosition extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setDisabled($disabled)
 * @method int getDisabled()
 */
class OnoffGroupApRadio extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class DeleteApgroupSsidConfig extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class GroupOverview extends Request
{
}/**
 * @method $this setTotalItem($totalItem)
 * @method int getTotalItem()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchApgroupName($searchApgroupName)
 * @method string getSearchApgroupName()
 * @method $this setMapType($mapType)
 * @method int getMapType()
 */
class ListApPositionMap extends Request
{
}/**
 * @method $this setdata($data)
 * @method string getdata()
 */
class InnerRefund extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class ShopActionReturning extends Request
{
}/**
 * @method $this setMapId($mapId)
 * @method int getMapId()
 * @method $this setApAssetId($apAssetId)
 * @method int getApAssetId()
 */
class DelApPosition extends Request
{
}/**
 * @method $this setDirType($dirType)
 * @method int getDirType()
 */
class GetOssServerSign extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 * @method $this setDeviceType($deviceType)
 * @method int getDeviceType()
 * @method $this setDirc($dirc)
 * @method string getDirc()
 */
class DeviceShowList extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class FindAp extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setBusinessProvince($businessProvince)
 * @method string getBusinessProvince()
 * @method $this setBusinessCity($businessCity)
 * @method string getBusinessCity()
 * @method $this setBusinessAddress($businessAddress)
 * @method string getBusinessAddress()
 * @method $this setBusinessManager($businessManager)
 * @method string getBusinessManager()
 * @method $this setWarn($warn)
 * @method int getWarn()
 * @method $this setWarnEmail($warnEmail)
 * @method string getWarnEmail()
 */
class BusinessUpdate extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteApgroupConfig extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class FrequencyAnalyse extends Request
{
}/**
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchApModelName($searchApModelName)
 * @method string getSearchApModelName()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListApUpgrade extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemFlowrateRanking extends Request
{
}/**
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setObjectName($objectName)
 * @method string getObjectName()
 * @method $this setChunkIndex($chunkIndex)
 * @method int getChunkIndex()
 * @method $this setChunkCnt($chunkCnt)
 * @method int getChunkCnt()
 * @method $this setUploadId($uploadId)
 * @method string getUploadId()
 */
class UpLoadMap extends Request
{
}/**
 * @method $this setSearchEmail($searchEmail)
 * @method string getSearchEmail()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListUmengPagePermission4Root extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setGids($gids)
 * @method array getGids()
 */
class GetAllActiveShopByGroup extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetProbeDataSubscriberConfig extends Request
{
}/**
 * @method $this setDid($did)
 * @method int getDid()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDevicePosition($devicePosition)
 * @method string getDevicePosition()
 */
class DeviceUpdate extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPer($per)
 * @method int getPer()
 */
class AreaShowList extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 */
class ShopGetredress extends Request
{
}/**
 * @method $this setMapId($mapId)
 * @method int getMapId()
 */
class DeletePositionMap extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetStaDetailedStatus extends Request
{
}/**
 * @method $this setApModelId($apModelId)
 * @method int getApModelId()
 * @method $this setImgAddr($imgAddr)
 * @method string getImgAddr()
 * @method $this setImgVersion($imgVersion)
 * @method string getImgVersion()
 * @method $this setComment($comment)
 * @method string getComment()
 */
class SetUpgradeImgByModel extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class GroupIntime extends Request
{
}/**
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setPermissionType($permissionType)
 * @method int getPermissionType()
 * @method $this setPagePermission($pagePermission)
 * @method string getPagePermission()
 * @method $this setBusinessIds($businessIds)
 * @method array getBusinessIds()
 * @method $this setShopIds($shopIds)
 * @method array getShopIds()
 * @method $this setShopGroupIds($shopGroupIds)
 * @method array getShopGroupIds()
 */
class CreateSubAccountPermission extends Request
{
}/**
 */
class GetAllApModel extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemMarketingCustomer extends Request
{
}/**
 * @method $this setFuzzySearch($fuzzySearch)
 * @method string getFuzzySearch()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setAncestorApgroupId($ancestorApgroupId)
 * @method int getAncestorApgroupId()
 */
class ListBriefConfigByAction extends Request
{
}/**
 * @method $this setMapId($mapId)
 * @method int getMapId()
 */
class GetMapUrl extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class RepairGroupAp extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setSearchUid($searchUid)
 * @method int getSearchUid()
 */
class ListSubAccountPermission extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SavePortalConfig extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApDetailedConfig extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApgroupPortalConfigProgress extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setEnd($end)
 * @method int getEnd()
 */
class GetApRunHistoryTimeSer extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SaveApMapInfo extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetGroupApRadioOnoffProgress extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class KickAndClearPMKcache extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ProfileTrade extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemSitingSelction extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class KickSta extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setSsid($ssid)
 * @method string getSsid()
 * @method $this setApAssetId($apAssetId)
 * @method int getApAssetId()
 * @method $this setEncKey($encKey)
 * @method string getEncKey()
 * @method $this setSsidLb($ssidLb)
 * @method int getSsidLb()
 * @method $this setDisassocWeakRssi($disassocWeakRssi)
 * @method int getDisassocWeakRssi()
 * @method $this setIgnoreWeakProbe($ignoreWeakProbe)
 * @method int getIgnoreWeakProbe()
 * @method $this setEncryption($encryption)
 * @method string getEncryption()
 * @method $this setDisabled($disabled)
 * @method int getDisabled()
 * @method $this setMaxassoc($maxassoc)
 * @method int getMaxassoc()
 * @method $this setHidden($hidden)
 * @method int getHidden()
 * @method $this setShortPreamble($shortPreamble)
 * @method int getShortPreamble()
 * @method $this setDisassocLowAck($disassocLowAck)
 * @method int getDisassocLowAck()
 * @method $this setIsolate($isolate)
 * @method int getIsolate()
 * @method $this setWmm($wmm)
 * @method int getWmm()
 * @method $this setAuthCache($authCache)
 * @method int getAuthCache()
 * @method $this setMaxInactivity($maxInactivity)
 * @method int getMaxInactivity()
 * @method $this setIeee80211w($ieee80211w)
 * @method int getIeee80211w()
 * @method $this setDynamicVlan($dynamicVlan)
 * @method int getDynamicVlan()
 * @method $this setVlanDhcp($vlanDhcp)
 * @method int getVlanDhcp()
 * @method $this setMulticastForward($multicastForward)
 * @method int getMulticastForward()
 * @method $this setCir($cir)
 * @method int getCir()
 * @method $this setNetwork($network)
 * @method int getNetwork()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setRadioIndex($radioIndex)
 * @method int getRadioIndex()
 * @method $this setInstantlyEffective($instantlyEffective)
 * @method int getInstantlyEffective()
 * @method $this setAuthServer($authServer)
 * @method string getAuthServer()
 * @method $this setAuthPort($authPort)
 * @method int getAuthPort()
 * @method $this setAuthSecret($authSecret)
 * @method string getAuthSecret()
 * @method $this setAcctServer($acctServer)
 * @method string getAcctServer()
 * @method $this setAcctPort($acctPort)
 * @method int getAcctPort()
 * @method $this setAcctSecret($acctSecret)
 * @method string getAcctSecret()
 * @method $this setSecondaryAuthServer($secondaryAuthServer)
 * @method string getSecondaryAuthServer()
 * @method $this setSecondaryAuthPort($secondaryAuthPort)
 * @method int getSecondaryAuthPort()
 * @method $this setSecondaryAuthSecret($secondaryAuthSecret)
 * @method string getSecondaryAuthSecret()
 * @method $this setSecondaryAcctServer($secondaryAcctServer)
 * @method string getSecondaryAcctServer()
 * @method $this setSecondaryAcctPort($secondaryAcctPort)
 * @method int getSecondaryAcctPort()
 * @method $this setSecondaryAcctSecret($secondaryAcctSecret)
 * @method string getSecondaryAcctSecret()
 * @method $this setNasid($nasid)
 * @method string getNasid()
 * @method $this setOwnip($ownip)
 * @method string getOwnip()
 * @method $this setDaeClient($daeClient)
 * @method string getDaeClient()
 * @method $this setDaePort($daePort)
 * @method int getDaePort()
 * @method $this setDaeSecret($daeSecret)
 * @method string getDaeSecret()
 */
class SaveApRadioSsidConfig extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 * @method $this setIid($iid)
 * @method int getIid()
 */
class UserDataDelete extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 */
class ShopDelete extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setCompanyId($companyId)
 * @method int getCompanyId()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setEnd($end)
 * @method int getEnd()
 * @method $this setZoomStart($zoomStart)
 * @method int getZoomStart()
 * @method $this setZoomEnd($zoomEnd)
 * @method int getZoomEnd()
 */
class GetOnlineApTimeSer extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class PutOssFile extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 */
class GetDailyStatistic extends Request
{
}/**
 * @method $this setApList($apList)
 * @method array getApList()
 * @method $this setAutoRenew($autoRenew)
 * @method bool getAutoRenew()
 * @method $this setMonths($months)
 * @method int getMonths()
 * @method $this setOffsetDays($offsetDays)
 * @method int getOffsetDays()
 */
class ConfigAutoRenew extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class OemHeatMap extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class HeadquartersTrend extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetApgroupDetailedConfig extends Request
{
}/**
 * @method $this setUploadData($uploadData)
 * @method string getUploadData()
 */
class ExcelToJson extends Request
{
}/**
 */
class CheckRootPermission extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setHwmode($hwmode)
 * @method string getHwmode()
 * @method $this setHtmode($htmode)
 * @method string getHtmode()
 * @method $this setChannel($channel)
 * @method int getChannel()
 * @method $this setTxpower($txpower)
 * @method int getTxpower()
 * @method $this setBeaconInt($beaconInt)
 * @method int getBeaconInt()
 * @method $this setRts($rts)
 * @method int getRts()
 * @method $this setFrag($frag)
 * @method int getFrag()
 * @method $this setShortgi($shortgi)
 * @method int getShortgi()
 * @method $this setProbereq($probereq)
 * @method int getProbereq()
 * @method $this setNoscan($noscan)
 * @method int getNoscan()
 * @method $this setMinrate($minrate)
 * @method int getMinrate()
 * @method $this setBcastRate($bcastRate)
 * @method int getBcastRate()
 * @method $this setMcastRate($mcastRate)
 * @method int getMcastRate()
 * @method $this setUapsd($uapsd)
 * @method int getUapsd()
 * @method $this setDisabled($disabled)
 * @method int getDisabled()
 * @method $this setRadioIndex($radioIndex)
 * @method int getRadioIndex()
 * @method $this setRequireMode($requireMode)
 * @method string getRequireMode()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setInstantlyEffective($instantlyEffective)
 * @method int getInstantlyEffective()
 */
class SaveApRadioConfig extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setWarn($warn)
 * @method int getWarn()
 * @method $this setWarnEmail($warnEmail)
 * @method string getWarnEmail()
 * @method $this setWarnPhone($warnPhone)
 * @method string getWarnPhone()
 * @method $this setCloseWarn($closeWarn)
 * @method int getCloseWarn()
 */
class ShopDataAlarm extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SaveAccountConfig extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstantlyEffective($instantlyEffective)
 * @method int getInstantlyEffective()
 */
class DeleteApRadioSsidConfig extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setMac($mac)
 * @method string getMac()
 */
class ShopSetfiltermac extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemMarketingSettingData extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchModel($searchModel)
 * @method string getSearchModel()
 */
class ListApAssetCanBeAdded extends Request
{
}/**
 */
class GetGroupApRadioConfigTemplate extends Request
{
}/**
 * @method $this setUid($uid)
 * @method int getUid()
 */
class GetBids4Uid4Root extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetRadioRunHistoryTimeSer extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setPagePermission($pagePermission)
 * @method int getPagePermission()
 * @method $this setGsPermission($gsPermission)
 * @method string getGsPermission()
 * @method $this setAliyunPk($aliyunPk)
 * @method int getAliyunPk()
 * @method $this setBid($bid)
 * @method int getBid()
 */
class SaveUmengPagePermission4Root extends Request
{
}/**
 */
class ListBusinesses extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setPagePermission($pagePermission)
 * @method string getPagePermission()
 * @method $this setBusinessIds($businessIds)
 * @method array getBusinessIds()
 * @method $this setShopIds($shopIds)
 * @method array getShopIds()
 * @method $this setShopGroupIds($shopGroupIds)
 * @method array getShopGroupIds()
 */
class ModifySubAccountPermission extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setIdtype($idtype)
 * @method int getIdtype()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 * @method $this setAreaNumber($areaNumber)
 * @method int getAreaNumber()
 * @method $this setAppType($appType)
 * @method int getAppType()
 */
class ProfileTag extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 */
class ListUpgradeImg extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class ListApPositionStatus extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class SaveStaStatus extends Request
{
}/**
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 * @method $this setSearchApModelName($searchApModelName)
 * @method string getSearchApModelName()
 * @method $this setSearchGroupName($searchGroupName)
 * @method string getSearchGroupName()
 * @method $this setSearchWanIp($searchWanIp)
 * @method string getSearchWanIp()
 * @method $this setSearchSwVersion($searchSwVersion)
 * @method int getSearchSwVersion()
 * @method $this setSearchBssEquals($searchBssEquals)
 * @method int getSearchBssEquals()
 * @method $this setSearchStatus($searchStatus)
 * @method int getSearchStatus()
 * @method $this setSearchCompanyName($searchCompanyName)
 * @method string getSearchCompanyName()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListApStatus extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ReportMinute extends Request
{
}/**
 * @method $this setApAssetId($apAssetId)
 * @method int getApAssetId()
 */
class ListApDetailInfo extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStime($stime)
 * @method string getStime()
 * @method $this setEtime($etime)
 * @method string getEtime()
 */
class ShopCreatemarketing extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DelPageConfigTemplate extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setSpMsg($spMsg)
 * @method string getSpMsg()
 */
class CeaseInstance extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setApiUrl($apiUrl)
 * @method string getApiUrl()
 * @method $this setParamGenScript($paramGenScript)
 * @method string getParamGenScript()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setHttpMethod($httpMethod)
 * @method string getHttpMethod()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setResourceIds($resourceIds)
 * @method array getResourceIds()
 */
class SaveProbeDataSubscriber extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DelPortalTemp extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDids($dids)
 * @method string getDids()
 */
class AreaCreate extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ReportZoneMinute extends Request
{
}/**
 * @method $this setIds($ids)
 * @method array getIds()
 */
class UpgradeAP extends Request
{
}/**
 */
class GetSendCommandByMacProgress extends Request
{
}/**
 */
class GetPageProperties extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class ShopCamera extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DelUmengPagePermission4Root extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setState($state)
 * @method int getState()
 * @method $this setFilterstate($filterstate)
 * @method int getFilterstate()
 * @method $this setMaxstoptime($maxstoptime)
 * @method int getMaxstoptime()
 * @method $this setMinstoptime($minstoptime)
 * @method int getMinstoptime()
 * @method $this setClerk($clerk)
 * @method int getClerk()
 * @method $this setFilterclose($filterclose)
 * @method int getFilterclose()
 * @method $this setCrowdfixed($crowdfixed)
 * @method int getCrowdfixed()
 * @method $this setHoliday($holiday)
 * @method string getHoliday()
 * @method $this setHnum($hnum)
 * @method string getHnum()
 * @method $this setWorkday($workday)
 * @method string getWorkday()
 * @method $this setWnum($wnum)
 * @method string getWnum()
 */
class ShopSetredress extends Request
{
}/**
 * @method $this setMac($mac)
 * @method string getMac()
 */
class GetDeviceInfoByMac extends Request
{
}/**
 * @method $this setGid($gid)
 * @method int getGid()
 */
class ShopGroupDelete extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetAccountConfig extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class BatchRegisterApAsset extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SaveGroupApRadioConfig extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class OemMarketingPotential extends Request
{
}/**
 * @method $this setBid($bid)
 * @method int getBid()
 */
class GetUserUmengPagePermission extends Request
{
}/**
 * @method $this setBusinessAddress($businessAddress)
 * @method string getBusinessAddress()
 * @method $this setBusinessCity($businessCity)
 * @method string getBusinessCity()
 * @method $this setBusinessManager($businessManager)
 * @method string getBusinessManager()
 * @method $this setBusinessName($businessName)
 * @method string getBusinessName()
 * @method $this setBusinessProvince($businessProvince)
 * @method string getBusinessProvince()
 * @method $this setBusinessSubtype($businessSubtype)
 * @method int getBusinessSubtype()
 * @method $this setBusinessTel($businessTel)
 * @method string getBusinessTel()
 * @method $this setBusinessTopType($businessTopType)
 * @method int getBusinessTopType()
 * @method $this setBusinessType($businessType)
 * @method int getBusinessType()
 * @method $this setCombo($combo)
 * @method string getCombo()
 * @method $this setWarn($warn)
 * @method int getWarn()
 * @method $this setWarnEmail($warnEmail)
 * @method string getWarnEmail()
 */
class BusinessCreate extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class BatchChangeGroupApName extends Request
{
}/**
 * @method $this setMacList($macList)
 * @method array getMacList()
 */
class GetScanMode extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SaveApgroupSsidConfig extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setSearchMac($searchMac)
 * @method string getSearchMac()
 * @method $this setSearchIp($searchIp)
 * @method string getSearchIp()
 * @method $this setSearchProtocal($searchProtocal)
 * @method string getSearchProtocal()
 * @method $this setSearchSsid($searchSsid)
 * @method string getSearchSsid()
 * @method $this setSearchUsername($searchUsername)
 * @method string getSearchUsername()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListApStaStatus extends Request
{
}/**
 * @method $this setGsid($gsid)
 * @method int getGsid()
 */
class OemFlowrateIntelligent extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 * @method $this setBeginDate($beginDate)
 * @method string getBeginDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class ReportZoneHour extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetAddApsProgress extends Request
{
}/**
 * @method $this setGid($gid)
 * @method int getGid()
 */
class ShopGroupInfo extends Request
{
}/**
 * @method $this setApgroupId($apgroupId)
 * @method int getApgroupId()
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class SaveApgroupScanConfig extends Request
{
}/**
 * @method $this setAgsid($agsid)
 * @method int getAgsid()
 */
class ReportZoneRealtime extends Request
{
}/**
 * @method $this setApList($apList)
 * @method array getApList()
 * @method $this setTimeCycleNum($timeCycleNum)
 * @method int getTimeCycleNum()
 */
class CreateRenewOrder extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 */
class ShopInfo extends Request
{
}/**
 * @method $this setSearchTempName($searchTempName)
 * @method string getSearchTempName()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setOrderCol($orderCol)
 * @method string getOrderCol()
 * @method $this setOrderDir($orderDir)
 * @method string getOrderDir()
 */
class ListPortalTemplate extends Request
{
}/**
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setLength($length)
 * @method int getLength()
 */
class GetBid extends Request
{
}/**
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 */
class BatchSaveApPosition extends Request
{
}/**
 * @method $this setSid($sid)
 * @method int getSid()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDeviceType($deviceType)
 * @method int getDeviceType()
 * @method $this setDeviceNum($deviceNum)
 * @method string getDeviceNum()
 * @method $this setDevicePosition($devicePosition)
 * @method string getDevicePosition()
 */
class DeviceCreate extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetStaRunHistoryTimeSer extends Request
{
}
