<?php

namespace aliyun\sdk\services\Vod20170314;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170314
 *
 * @package aliyun\sdk\services\Vod20170314
 * @method UpdateMaterial UpdateMaterial()
 * @method TransferMediaData TransferMediaData()
 * @method GetOSSFlowStatis GetOSSFlowStatis()
 * @method GetDomain GetDomain()
 * @method SetCDNForceRedirectConfig SetCDNForceRedirectConfig()
 * @method DescribeVodDomainRealTimeHttpCodeData DescribeVodDomainRealTimeHttpCodeData()
 * @method DescribeVodDomainRealTimeReqHitRateData DescribeVodDomainRealTimeReqHitRateData()
 * @method AddDomain AddDomain()
 * @method GetStorageInfo GetStorageInfo()
 * @method AddCategory AddCategory()
 * @method SubmitAIVideoPornRecogJob SubmitAIVideoPornRecogJob()
 * @method DeleteInitCustomTemplateInfo DeleteInitCustomTemplateInfo()
 * @method DescribeVodDomainDetail DescribeVodDomainDetail()
 * @method AddWatermarkGroup AddWatermarkGroup()
 * @method UpdateTranscodeConf UpdateTranscodeConf()
 * @method CompleteOrderParam CompleteOrderParam()
 * @method UpdateEditingProject UpdateEditingProject()
 * @method SetAIService SetAIService()
 * @method ListSnapshots ListSnapshots()
 * @method GetDomainSecurity GetDomainSecurity()
 * @method UpdateCategory UpdateCategory()
 * @method PreloadVodObjectCaches PreloadVodObjectCaches()
 * @method DescribeUserTimeRangeByDay DescribeUserTimeRangeByDay()
 * @method StartDomain StartDomain()
 * @method DescribeVodDomainRegionData DescribeVodDomainRegionData()
 * @method RefreshVodObjectCaches RefreshVodObjectCaches()
 * @method UpdateWatermarkGroup UpdateWatermarkGroup()
 * @method DescribeVodDomainRealTimeByteHitRateData DescribeVodDomainRealTimeByteHitRateData()
 * @method CreateUploadMaterial CreateUploadMaterial()
 * @method GetEditingProjectList GetEditingProjectList()
 * @method AddEditingProject AddEditingProject()
 * @method UpdateVodDomain UpdateVodDomain()
 * @method ListAIVideoCoverJob ListAIVideoCoverJob()
 * @method CreateUploadMediaFile CreateUploadMediaFile()
 * @method QueryUploadInfo QueryUploadInfo()
 * @method SearchMaterial SearchMaterial()
 * @method AddThirdPartPlayPolicy AddThirdPartPlayPolicy()
 * @method UpdateAudioConfig UpdateAudioConfig()
 * @method DeleteDomainReferer DeleteDomainReferer()
 * @method DescribeVodDomainCertificateInfo DescribeVodDomainCertificateInfo()
 * @method GetWatermarkSwitch GetWatermarkSwitch()
 * @method DescribeVodDomainsUsageByDay DescribeVodDomainsUsageByDay()
 * @method AddVodTemplate AddVodTemplate()
 * @method GetCheckChannel GetCheckChannel()
 * @method SetEditingProjectMaterials SetEditingProjectMaterials()
 * @method SetMessageCallback SetMessageCallback()
 * @method GetMediaAuditResultTimeline GetMediaAuditResultTimeline()
 * @method DeleteAudioConfig DeleteAudioConfig()
 * @method ProduceEditingProjectVideo ProduceEditingProjectVideo()
 * @method DescribeUserVvByVideoid DescribeUserVvByVideoid()
 * @method SetDomainSecurity SetDomainSecurity()
 * @method GenerateDownloadSecretKey GenerateDownloadSecretKey()
 * @method DescribeVodDomainRealTimeSrcBpsData DescribeVodDomainRealTimeSrcBpsData()
 * @method DeleteEditingProject DeleteEditingProject()
 * @method SubmitAIJob SubmitAIJob()
 * @method AssumeOssRole AssumeOssRole()
 * @method GetVideoConfig GetVideoConfig()
 * @method ListCompanionresourceInfo ListCompanionresourceInfo()
 * @method DescribeVodDomainSrcBpsData DescribeVodDomainSrcBpsData()
 * @method AddWatermarkRelation AddWatermarkRelation()
 * @method GetAuditHistory GetAuditHistory()
 * @method DescribeVodDomainCname DescribeVodDomainCname()
 * @method GetCDNStatis GetCDNStatis()
 * @method ListAIVideoPornRecogJob ListAIVideoPornRecogJob()
 * @method GetAudioTemplate GetAudioTemplate()
 * @method ListCustomTemplate ListCustomTemplate()
 * @method GetPlayStatis GetPlayStatis()
 * @method GetMessageCallback GetMessageCallback()
 * @method GetVideoInfo GetVideoInfo()
 * @method ListAITemplate ListAITemplate()
 * @method SetDefaultVodTemplate SetDefaultVodTemplate()
 * @method UpdateMediaInfo UpdateMediaInfo()
 * @method InitCustomerWorkFlow InitCustomerWorkFlow()
 * @method GetCategoryList GetCategoryList()
 * @method GetUploadSTSToken GetUploadSTSToken()
 * @method StartVodDomain StartVodDomain()
 * @method GetMessageCallbackEventList GetMessageCallbackEventList()
 * @method GetCustomTemplate GetCustomTemplate()
 * @method DeleteWatermarkGroup DeleteWatermarkGroup()
 * @method ListAIJob ListAIJob()
 * @method AddVideoTag AddVideoTag()
 * @method UpdateSpecifyCustomerTemplateConfig UpdateSpecifyCustomerTemplateConfig()
 * @method CreateOrder CreateOrder()
 * @method SetDefaultAITemplate SetDefaultAITemplate()
 * @method DescribeCDNRefreshTasks DescribeCDNRefreshTasks()
 * @method SubmitAIVideoCoverJob SubmitAIVideoCoverJob()
 * @method ListAIASRJob ListAIASRJob()
 * @method ListAudioTemplate ListAudioTemplate()
 * @method AddCustomTemplate AddCustomTemplate()
 * @method UpdateMediaCategory UpdateMediaCategory()
 * @method AddAITemplate AddAITemplate()
 * @method AddSnapshot AddSnapshot()
 * @method AddAudioTemplate AddAudioTemplate()
 * @method CreateAudit CreateAudit()
 * @method SPILogicalDeleteResourceAction SPILogicalDeleteResourceAction()
 * @method GetCDNStatisSum GetCDNStatisSum()
 * @method RefreshUploadToken RefreshUploadToken()
 * @method DescribeVodDomainUvData DescribeVodDomainUvData()
 * @method SwitchWatermark SwitchWatermark()
 * @method SubmitTranscodeJobs SubmitTranscodeJobs()
 * @method SetStorageACL SetStorageACL()
 * @method GetPlayChannelKey GetPlayChannelKey()
 * @method DeleteVideoTag DeleteVideoTag()
 * @method DeleteCustomTemplateAndGroup DeleteCustomTemplateAndGroup()
 * @method GetVideoList GetVideoList()
 * @method DescribeVodDomainSrcTrafficData DescribeVodDomainSrcTrafficData()
 * @method DeleteWatermarkInfo DeleteWatermarkInfo()
 * @method UpdateSnapshot UpdateSnapshot()
 * @method GetAuditResult GetAuditResult()
 * @method DescribeVodDomainLog DescribeVodDomainLog()
 * @method RefreshWorkFlow RefreshWorkFlow()
 * @method GetMidYKVid GetMidYKVid()
 * @method UpdateApiAuth UpdateApiAuth()
 * @method GetAppLicenseList GetAppLicenseList()
 * @method ListAIVideoCensorJob ListAIVideoCensorJob()
 * @method OpenVodService OpenVodService()
 * @method SetDefaultWatermark SetDefaultWatermark()
 * @method DescribeUserVvByDay DescribeUserVvByDay()
 * @method FaceRegistration FaceRegistration()
 * @method ListAIVideoTerrorismRecogJob ListAIVideoTerrorismRecogJob()
 * @method DeleteCompanionresourceInfo DeleteCompanionresourceInfo()
 * @method DeleteMezzanines DeleteMezzanines()
 * @method UpdateCustomTemplate UpdateCustomTemplate()
 * @method SetDefaultTemplateGroup SetDefaultTemplateGroup()
 * @method NotifyProduce NotifyProduce()
 * @method DescribeVodDomainHttpCodeData DescribeVodDomainHttpCodeData()
 * @method UpdateVideoInfos UpdateVideoInfos()
 * @method DescribeVodUserDomains DescribeVodUserDomains()
 * @method UpdateVideoStatus UpdateVideoStatus()
 * @method GetVideoInfos GetVideoInfos()
 * @method DescribeVodDomainRealTimeTrafficData DescribeVodDomainRealTimeTrafficData()
 * @method EditVideoIndexFile EditVideoIndexFile()
 * @method SyncMaterial SyncMaterial()
 * @method UpdateTranscodeTemplate UpdateTranscodeTemplate()
 * @method AddCompanionresourceInfo AddCompanionresourceInfo()
 * @method UpdateAudioTemplate UpdateAudioTemplate()
 * @method DescribeUserAvgCountByDay DescribeUserAvgCountByDay()
 * @method ListAudioConfig ListAudioConfig()
 * @method UpdateImageInfos UpdateImageInfos()
 * @method GetEditingProject GetEditingProject()
 * @method DescribeVodDomainConfigs DescribeVodDomainConfigs()
 * @method QueryOrderParam QueryOrderParam()
 * @method DescribeVodDomainHitRateData DescribeVodDomainHitRateData()
 * @method DescribeVodDomainISPData DescribeVodDomainISPData()
 * @method UpdateMediaInfoStatus UpdateMediaInfoStatus()
 * @method UpdateCustomTemplateAndGroup UpdateCustomTemplateAndGroup()
 * @method Modify Modify()
 * @method AddAppLicense AddAppLicense()
 * @method StopDomain StopDomain()
 * @method DeleteCustomTemplate DeleteCustomTemplate()
 * @method GetWatermarkGroup GetWatermarkGroup()
 * @method GetEditingProjectMaterials GetEditingProjectMaterials()
 * @method GetVodTemplate GetVodTemplate()
 * @method DeleteCategory DeleteCategory()
 * @method UpdateEditingProjectStatus UpdateEditingProjectStatus()
 * @method DescribeVodDomainUsageData DescribeVodDomainUsageData()
 * @method DisplayAIAuditSwitch DisplayAIAuditSwitch()
 * @method GetMediaStream GetMediaStream()
 * @method UpdateWatermark UpdateWatermark()
 * @method SetTemplateGroupProperty SetTemplateGroupProperty()
 * @method DeleteMaterial DeleteMaterial()
 * @method DeleteTemplateGroup DeleteTemplateGroup()
 * @method SPICheckResourceAction SPICheckResourceAction()
 * @method PayOrderCallback PayOrderCallback()
 * @method GetStorageList GetStorageList()
 * @method DeleteAITemplate DeleteAITemplate()
 * @method GetMediaDNAResult GetMediaDNAResult()
 * @method DescribeVodRefreshTasks DescribeVodRefreshTasks()
 * @method AddStorage AddStorage()
 * @method GetOSSStatis GetOSSStatis()
 * @method DescribeVodRefreshQuota DescribeVodRefreshQuota()
 * @method SetCDNReferer SetCDNReferer()
 * @method GetDefaultAITemplate GetDefaultAITemplate()
 * @method DescribeVodDomainTopReferVisit DescribeVodDomainTopReferVisit()
 * @method SetCheckChannel SetCheckChannel()
 * @method GetStorageRegionList GetStorageRegionList()
 * @method ListAuditSecurityIp ListAuditSecurityIp()
 * @method GetWatermarkInfo GetWatermarkInfo()
 * @method DeleteMediaInfo DeleteMediaInfo()
 * @method GetTotalStatis GetTotalStatis()
 * @method DescribeVodUserResourcePackage DescribeVodUserResourcePackage()
 * @method AddMediaTag AddMediaTag()
 * @method DescribeVodService DescribeVodService()
 * @method RefreshMaterialWorkFlow RefreshMaterialWorkFlow()
 * @method SubmitAIMediaAuditJob SubmitAIMediaAuditJob()
 * @method GetDomainList GetDomainList()
 * @method UserExist UserExist()
 * @method SetDefaultUploadStorage SetDefaultUploadStorage()
 * @method SubmitAIASRJob SubmitAIASRJob()
 * @method DescribeVodDomainQpsData DescribeVodDomainQpsData()
 * @method GetCustomerTranscodeConf GetCustomerTranscodeConf()
 * @method DeleteMidYKVid DeleteMidYKVid()
 * @method AddVodDomain AddVodDomain()
 * @method SetCDNDomainServerCertificate SetCDNDomainServerCertificate()
 * @method GetMezzanineInfo GetMezzanineInfo()
 * @method DeleteVideo DeleteVideo()
 * @method DescribeVodDomainPvData DescribeVodDomainPvData()
 * @method DescribeVodDomainRealTimeSrcTrafficData DescribeVodDomainRealTimeSrcTrafficData()
 * @method DescribeUserUvByDay DescribeUserUvByDay()
 * @method AddTranscodeTemplate AddTranscodeTemplate()
 * @method DescribeVodUserQuota DescribeVodUserQuota()
 * @method AddLiveStreamVideo AddLiveStreamVideo()
 * @method SubmitAIVideoTerrorismRecogJob SubmitAIVideoTerrorismRecogJob()
 * @method NotifyInitResource NotifyInitResource()
 * @method CreateUploadAttachedMedia CreateUploadAttachedMedia()
 * @method ListVodTemplate ListVodTemplate()
 * @method SetCustomerConfig SetCustomerConfig()
 * @method DescribeCdnDomainLogs DescribeCdnDomainLogs()
 * @method SubmitPreprocessJobs SubmitPreprocessJobs()
 * @method SearchMediaInfo SearchMediaInfo()
 * @method GetMaterial GetMaterial()
 * @method AssumeSlsRole AssumeSlsRole()
 * @method ListAIStatisType ListAIStatisType()
 * @method DeleteStorage DeleteStorage()
 * @method SetVodDomainCertificate SetVodDomainCertificate()
 * @method DescribeVodDomainBpsData DescribeVodDomainBpsData()
 * @method DeleteStream DeleteStream()
 * @method DeleteVodDomain DeleteVodDomain()
 * @method GetWatermark GetWatermark()
 * @method GetMaterialList GetMaterialList()
 * @method GetCustomerConfig GetCustomerConfig()
 * @method APIProxy APIProxy()
 * @method DescribeVodDomainTrafficData DescribeVodDomainTrafficData()
 * @method SearchVideo SearchVideo()
 * @method GetMediaAuditResult GetMediaAuditResult()
 * @method ListDomainReferer ListDomainReferer()
 * @method GetBatchPlayInfo GetBatchPlayInfo()
 * @method AddMediaInfo AddMediaInfo()
 * @method CreateUploadImage CreateUploadImage()
 * @method AddDomainReferer AddDomainReferer()
 * @method SetDomainAuth SetDomainAuth()
 * @method StopVodDomain StopVodDomain()
 * @method SubmitAIVideoSummaryJob SubmitAIVideoSummaryJob()
 * @method AddPipeline AddPipeline()
 * @method AddApiAuth AddApiAuth()
 * @method GetVideoPlayInfoForCloud GetVideoPlayInfoForCloud()
 * @method DescribeVodDomainTopUrlVisit DescribeVodDomainTopUrlVisit()
 * @method DeleteWatermarkRelation DeleteWatermarkRelation()
 * @method GetImageInfo GetImageInfo()
 * @method GetTemplateGroup GetTemplateGroup()
 * @method InitCustomerWithSystemTemplateAndGroup InitCustomerWithSystemTemplateAndGroup()
 * @method RefreshUploadVideo RefreshUploadVideo()
 * @method SubmitAIVideoCensorJob SubmitAIVideoCensorJob()
 * @method DescribeCdnRefreshQuota DescribeCdnRefreshQuota()
 * @method UpdateWatermarkInfo UpdateWatermarkInfo()
 * @method DeleteWatermark DeleteWatermark()
 * @method SetAuditSecurityIp SetAuditSecurityIp()
 * @method GetPlayInfo GetPlayInfo()
 * @method DescribeDomainBpsData DescribeDomainBpsData()
 * @method AddCustomTemplateAndGroup AddCustomTemplateAndGroup()
 * @method GetMTSStatis GetMTSStatis()
 * @method SearchMedia SearchMedia()
 * @method GetPersonalStorageList GetPersonalStorageList()
 * @method DescribeVodTopDomainsByFlow DescribeVodTopDomainsByFlow()
 * @method GetCategories GetCategories()
 * @method DeleteImage DeleteImage()
 * @method GetAIMediaAuditJob GetAIMediaAuditJob()
 * @method AddOriginTemplate AddOriginTemplate()
 * @method GetAuditResultDetail GetAuditResultDetail()
 * @method UpdateCategoryName UpdateCategoryName()
 * @method DescribePlayVideoStatis DescribePlayVideoStatis()
 * @method DeleteVodTemplate DeleteVodTemplate()
 * @method GetVideoPlayAuth GetVideoPlayAuth()
 * @method InitSystemTemplateGroup InitSystemTemplateGroup()
 * @method ListTemplateGroup ListTemplateGroup()
 * @method GetDomainAuth GetDomainAuth()
 * @method UpdateAppLicense UpdateAppLicense()
 * @method DeleteDomain DeleteDomain()
 * @method AddTemplateGroup AddTemplateGroup()
 * @method GetWatermarks GetWatermarks()
 * @method RefreshUploadMaterialToken RefreshUploadMaterialToken()
 * @method GetMediaInfoList GetMediaInfoList()
 * @method CreateKMSServiceKey CreateKMSServiceKey()
 * @method SetL2OssKeyConfig SetL2OssKeyConfig()
 * @method DescribeVodDomainRealTimeQpsData DescribeVodDomainRealTimeQpsData()
 * @method DescribeDomainFlowData DescribeDomainFlowData()
 * @method DescribeVodCertificateList DescribeVodCertificateList()
 * @method DescribeVodCertificateDetail DescribeVodCertificateDetail()
 * @method ListLiveRecordVideo ListLiveRecordVideo()
 * @method GetAITemplate GetAITemplate()
 * @method ListAIVideoSummaryJob ListAIVideoSummaryJob()
 * @method DescribeUserAvgTimeByDay DescribeUserAvgTimeByDay()
 * @method GetAIStatis GetAIStatis()
 * @method GetCompanionresourceInfo GetCompanionresourceInfo()
 * @method UpdateAITemplate UpdateAITemplate()
 * @method AddWatermarkInfo AddWatermarkInfo()
 * @method SPIPhysicalDeleteResourceAction SPIPhysicalDeleteResourceAction()
 * @method UpdateMaterialStatus UpdateMaterialStatus()
 * @method SubmitSnapshotJob SubmitSnapshotJob()
 * @method GetUploadProgress GetUploadProgress()
 * @method GetCategoryTree GetCategoryTree()
 * @method ListAllCategory ListAllCategory()
 * @method UpdateVodTemplate UpdateVodTemplate()
 * @method GetThirdPartPlayPolicy GetThirdPartPlayPolicy()
 * @method ListWatermarkInfo ListWatermarkInfo()
 * @method AddAudioConfig AddAudioConfig()
 * @method SearchEditingProject SearchEditingProject()
 * @method ListAIVideoCategoryJob ListAIVideoCategoryJob()
 * @method DeleteAudioTemplate DeleteAudioTemplate()
 * @method CategoryTree CategoryTree()
 * @method GetAppLicense GetAppLicense()
 * @method CreateUploadVideo CreateUploadVideo()
 * @method GetPlayChannelList GetPlayChannelList()
 * @method UpdateTemplateGroupDaemon UpdateTemplateGroupDaemon()
 * @method AssumeExperienceRole AssumeExperienceRole()
 * @method GetServiceStatus GetServiceStatus()
 * @method FinishLiveStreamRecord FinishLiveStreamRecord()
 * @method UploadMediaByURL UploadMediaByURL()
 * @method GetVideoPlayInfo GetVideoPlayInfo()
 * @method SetDefaultPlayDomain SetDefaultPlayDomain()
 * @method SubmitAIVideoCategoryJob SubmitAIVideoCategoryJob()
 * @method UpdateTemplateGroup UpdateTemplateGroup()
 * @method DescribeUserVodStatus DescribeUserVodStatus()
 * @method CheckVideo CheckVideo()
 * @method DeleteMediaTag DeleteMediaTag()
 * @method AuthorizeAppLicense AuthorizeAppLicense()
 * @method DescribeVodDomainRealTimeBpsData DescribeVodDomainRealTimeBpsData()
 * @method GetVideoDNAResult GetVideoDNAResult()
 * @method UpdateVideoInfo UpdateVideoInfo()
 * @method GetMediaInfo GetMediaInfo()
 * @method GetMediaAuditResultDetail GetMediaAuditResultDetail()
 * @method DescribeUserVvTopByDay DescribeUserVvTopByDay()
 * @method GetAIService GetAIService()
 * @method AddMidYKVid AddMidYKVid()
 * @method AddWatermark AddWatermark()
 */
class V20170314
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setCoverUrl($coverUrl)
 * @method string getCoverUrl()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setVideoInfo($videoInfo)
 * @method string getVideoInfo()
 * @method $this setMezzanineInfo($mezzanineInfo)
 * @method string getMezzanineInfo()
 * @method $this setStreamInfos($streamInfos)
 * @method string getStreamInfos()
 */
class TransferMediaData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetOSSFlowStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($aPIProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($aPIProxyParam)
 * @method string getAPIProxyParam()
 */
class SetCDNForceRedirectConfig extends Request
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
class DescribeVodDomainRealTimeHttpCodeData extends Request
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
class DescribeVodDomainRealTimeReqHitRateData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainType($domainType)
 * @method string getDomainType()
 * @method $this setEnableDomain($enableDomain)
 * @method bool getEnableDomain()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourcePort($sourcePort)
 * @method int getSourcePort()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setPlayRegion($playRegion)
 * @method string getPlayRegion()
 * @method $this setPriorities($priorities)
 * @method string getPriorities()
 */
class AddDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class GetStorageInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setParentId($parentId)
 * @method int getParentId()
 */
class AddCategory extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoPornRecogConfig($aIVideoPornRecogConfig)
 * @method string getAIVideoPornRecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoPornRecogJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class DeleteInitCustomTemplateInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupName($watermarkGroupName)
 * @method string getWatermarkGroupName()
 */
class AddWatermarkGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setids($ids)
 * @method string getids()
 * @method $this setEncryptTemplayeIds($encryptTemplayeIds)
 * @method string getEncryptTemplayeIds()
 */
class UpdateTranscodeConf extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class CompleteOrderParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTimeline($timeline)
 * @method string getTimeline()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverUrl($coverUrl)
 * @method string getCoverUrl()
 * @method $this setDuration($duration)
 * @method Float getDuration()
 */
class UpdateEditingProject extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setTypes($types)
 * @method string getTypes()
 */
class SetAIService extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setSnapshotType($snapshotType)
 * @method string getSnapshotType()
 * @method $this setAuthTimeout($authTimeout)
 * @method string getAuthTimeout()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 */
class ListSnapshots extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetDomainSecurity extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateCategory extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 */
class PreloadVodObjectCaches extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserTimeRangeByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartDomain extends Request
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
class DescribeVodDomainRegionData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshVodObjectCaches extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 * @method $this setWatermarkGroupName($watermarkGroupName)
 * @method string getWatermarkGroupName()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 */
class UpdateWatermarkGroup extends Request
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
class DescribeVodDomainRealTimeByteHitRateData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCreateTime($createTime)
 * @method string getCreateTime()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class CreateUploadMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetEditingProjectList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTimeline($timeline)
 * @method string getTimeline()
 * @method $this setCoverUrl($coverUrl)
 * @method string getCoverUrl()
 * @method $this setDuration($duration)
 * @method Float getDuration()
 */
class AddEditingProject extends Request
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
class UpdateVodDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoCoverJobIds($aIVideoCoverJobIds)
 * @method string getAIVideoCoverJobIds()
 */
class ListAIVideoCoverJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setFileExtension($fileExtension)
 * @method string getFileExtension()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CreateUploadMediaFile extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setTranscodeGroupId($transcodeGroupId)
 * @method string getTranscodeGroupId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class QueryUploadInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class SearchMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setPolicyInfoList($policyInfoList)
 * @method string getPolicyInfoList()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class AddThirdPartPlayPolicy extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateAudioConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererIdList($refererIdList)
 * @method string getRefererIdList()
 */
class DeleteDomainReferer extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainCertificateInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetWatermarkSwitch extends Request
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
class DescribeVodDomainsUsageByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setSubTemplateType($subTemplateType)
 * @method string getSubTemplateType()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class AddVodTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetCheckChannel extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 */
class SetEditingProjectMaterials extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setCallbackSwitch($callbackSwitch)
 * @method string getCallbackSwitch()
 * @method $this setCallbackType($callbackType)
 * @method string getCallbackType()
 * @method $this setCallbackURL($callbackURL)
 * @method string getCallbackURL()
 * @method $this setEventTypeList($eventTypeList)
 * @method string getEventTypeList()
 * @method $this setAuthSwitch($authSwitch)
 * @method string getAuthSwitch()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setMnsEndpoint($mnsEndpoint)
 * @method string getMnsEndpoint()
 * @method $this setMnsQueueName($mnsQueueName)
 * @method string getMnsQueueName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class SetMessageCallback extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class GetMediaAuditResultTimeline extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DeleteAudioConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class ProduceEditingProjectVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoid($videoid)
 * @method string getVideoid()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserVvByVideoid extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererSwitch($refererSwitch)
 * @method string getRefererSwitch()
 * @method $this setAuthSwitch($authSwitch)
 * @method string getAuthSwitch()
 */
class SetDomainSecurity extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAppIdentification($appIdentification)
 * @method string getAppIdentification()
 * @method $this setAppDecryptKey($appDecryptKey)
 * @method string getAppDecryptKey()
 */
class GenerateDownloadSecretKey extends Request
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
class DescribeVodDomainRealTimeSrcBpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectIds($projectIds)
 * @method string getProjectIds()
 */
class DeleteEditingProject extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTypes($types)
 * @method string getTypes()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 */
class SubmitAIJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setPrefix($prefix)
 * @method string getPrefix()
 */
class AssumeOssRole extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class GetVideoConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCompanionResourceType($companionResourceType)
 * @method string getCompanionResourceType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListCompanionresourceInfo extends Request
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
class DescribeVodDomainSrcBpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 * @method $this setWatermarkIds($watermarkIds)
 * @method string getWatermarkIds()
 */
class AddWatermarkRelation extends Request
{
}/**
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetAuditHistory extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainCname extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setLevel($level)
 * @method string getLevel()
 */
class GetCDNStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoPornRecogJobIds($aIVideoPornRecogJobIds)
 * @method string getAIVideoPornRecogJobIds()
 */
class ListAIVideoPornRecogJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class GetAudioTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class ListCustomTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLevel($level)
 * @method string getLevel()
 */
class GetPlayStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GetMessageCallback extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setResultTypes($resultTypes)
 * @method string getResultTypes()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetVideoInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 */
class ListAITemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 */
class SetDefaultVodTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setPrivilege($privilege)
 * @method int getPrivilege()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowUserData($mediaWorkflowUserData)
 * @method string getMediaWorkflowUserData()
 * @method $this setMediaWorkflowRunId($mediaWorkflowRunId)
 * @method string getMediaWorkflowRunId()
 */
class UpdateMediaInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setFlushConfig($flushConfig)
 * @method bool getFlushConfig()
 */
class InitCustomerWorkFlow extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetCategoryList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setFileType($fileType)
 * @method int getFileType()
 * @method $this setImageExt($imageExt)
 * @method string getImageExt()
 */
class GetUploadSTSToken extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartVodDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetMessageCallbackEventList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class GetCustomTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 */
class DeleteWatermarkGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 */
class ListAIJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class AddVideoTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTranscodeIds($transcodeIds)
 * @method string getTranscodeIds()
 * @method $this setEncryptTemplateIds($encryptTemplateIds)
 * @method string getEncryptTemplateIds()
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class UpdateSpecifyCustomerTemplateConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateOrder extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class SetDefaultAITemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($aPIProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($aPIProxyParam)
 * @method string getAPIProxyParam()
 */
class DescribeCDNRefreshTasks extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCoverConfig($aIVideoCoverConfig)
 * @method string getAIVideoCoverConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoCoverJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIASRJobIds($aIASRJobIds)
 * @method string getAIASRJobIds()
 */
class ListAIASRJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListAudioTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setAudio($audio)
 * @method string getAudio()
 * @method $this setTransConfig($transConfig)
 * @method string getTransConfig()
 * @method $this setMuxConfig($muxConfig)
 * @method string getMuxConfig()
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setUseWaterMark($useWaterMark)
 * @method string getUseWaterMark()
 * @method $this setEncrypt($encrypt)
 * @method string getEncrypt()
 * @method $this setCondition($condition)
 * @method string getCondition()
 * @method $this setNarrowBand($narrowBand)
 * @method string getNarrowBand()
 */
class AddCustomTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 */
class UpdateMediaCategory extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class AddAITemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setNumber($number)
 * @method string getNumber()
 */
class AddSnapshot extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCodec($codec)
 * @method string getCodec()
 * @method $this setBitrate($bitrate)
 * @method string getBitrate()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setRemove($remove)
 * @method string getRemove()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setIsDefault($isDefault)
 * @method string getIsDefault()
 */
class AddAudioTemplate extends Request
{
}/**
 * @method $this setAuditContent($auditContent)
 * @method string getAuditContent()
 */
class CreateAudit extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class SPILogicalDeleteResourceAction extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setLevelRule($levelRule)
 * @method string getLevelRule()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetCDNStatisSum extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class RefreshUploadToken extends Request
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
class DescribeVodDomainUvData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SwitchWatermark extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setEncryptConfig($encryptConfig)
 * @method string getEncryptConfig()
 * @method $this setOverrideParams($overrideParams)
 * @method string getOverrideParams()
 */
class SubmitTranscodeJobs extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setStorageACL($storageACL)
 * @method string getStorageACL()
 */
class SetStorageACL extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetPlayChannelKey extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class DeleteVideoTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class DeleteCustomTemplateAndGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class GetVideoList extends Request
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
class DescribeVodDomainSrcTrafficData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkIds($watermarkIds)
 * @method string getWatermarkIds()
 * @method $this setDelEmptyGroup($delEmptyGroup)
 * @method string getDelEmptyGroup()
 */
class DeleteWatermarkInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTime($time)
 * @method string getTime()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setNumber($number)
 * @method string getNumber()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setSnapshotId($snapshotId)
 * @method string getSnapshotId()
 */
class UpdateSnapshot extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class GetAuditResult extends Request
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
class DescribeVodDomainLog extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class RefreshWorkFlow extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setYkVid($ykVid)
 * @method string getYkVid()
 */
class GetMidYKVid extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setState($state)
 * @method int getState()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class UpdateApiAuth extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 * @method $this setContractNo($contractNo)
 * @method string getContractNo()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSdkIds($sdkIds)
 * @method string getSdkIds()
 * @method $this setFeature($feature)
 * @method string getFeature()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartCreationTime($startCreationTime)
 * @method string getStartCreationTime()
 * @method $this setEndCreationTime($endCreationTime)
 * @method string getEndCreationTime()
 * @method $this setStartExpiredTime($startExpiredTime)
 * @method string getStartExpiredTime()
 * @method $this setEndExpiredTime($endExpiredTime)
 * @method string getEndExpiredTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetAppLicenseList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoCensorJobIds($aIVideoCensorJobIds)
 * @method string getAIVideoCensorJobIds()
 */
class ListAIVideoCensorJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class OpenVodService extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class SetDefaultWatermark extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserVvByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setPersonName($personName)
 * @method string getPersonName()
 * @method $this setPersonId($personId)
 * @method string getPersonId()
 * @method $this setPersonLibrary($personLibrary)
 * @method string getPersonLibrary()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setImageIds($imageIds)
 * @method string getImageIds()
 */
class FaceRegistration extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoTerrorismRecogJobIds($aIVideoTerrorismRecogJobIds)
 * @method string getAIVideoTerrorismRecogJobIds()
 */
class ListAIVideoTerrorismRecogJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCompanionResourceIds($companionResourceIds)
 * @method string getCompanionResourceIds()
 */
class DeleteCompanionresourceInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class DeleteMezzanines extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setAudio($audio)
 * @method string getAudio()
 * @method $this setTransConfig($transConfig)
 * @method string getTransConfig()
 * @method $this setMuxConfig($muxConfig)
 * @method string getMuxConfig()
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setUseWaterMark($useWaterMark)
 * @method string getUseWaterMark()
 * @method $this setEncrypt($encrypt)
 * @method string getEncrypt()
 * @method $this setCondition($condition)
 * @method string getCondition()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setNarrowBand($narrowBand)
 * @method string getNarrowBand()
 */
class UpdateCustomTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class SetDefaultTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setdata($data)
 * @method string getdata()
 */
class NotifyProduce extends Request
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
class DescribeVodDomainHttpCodeData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUpdateContent($updateContent)
 * @method string getUpdateContent()
 */
class UpdateVideoInfos extends Request
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
 * @method $this setCdnType($cdnType)
 * @method string getCdnType()
 * @method $this setCheckDomainShow($checkDomainShow)
 * @method bool getCheckDomainShow()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setFuncId($funcId)
 * @method string getFuncId()
 * @method $this setFuncFilter($funcFilter)
 * @method string getFuncFilter()
 */
class DescribeVodUserDomains extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setstatus($status)
 * @method string getstatus()
 */
class UpdateVideoStatus extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class GetVideoInfos extends Request
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
class DescribeVodDomainRealTimeTrafficData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setEditType($editType)
 * @method string getEditType()
 * @method $this setEditConfig($editConfig)
 * @method string getEditConfig()
 */
class EditVideoIndexFile extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class SyncMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setResolution($resolution)
 * @method string getResolution()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setVideoBitrate($videoBitrate)
 * @method string getVideoBitrate()
 * @method $this setVideoCodec($videoCodec)
 * @method string getVideoCodec()
 * @method $this setAudioBitrate($audioBitrate)
 * @method string getAudioBitrate()
 * @method $this setAudioCodec($audioCodec)
 * @method string getAudioCodec()
 */
class UpdateTranscodeTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaFileId($mediaFileId)
 * @method string getMediaFileId()
 * @method $this setCompanionResourceType($companionResourceType)
 * @method string getCompanionResourceType()
 * @method $this setCompanionResourceConfig($companionResourceConfig)
 * @method string getCompanionResourceConfig()
 * @method $this setResourceName($resourceName)
 * @method string getResourceName()
 * @method $this setResourceTags($resourceTags)
 * @method string getResourceTags()
 */
class AddCompanionresourceInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCodec($codec)
 * @method string getCodec()
 * @method $this setBitrate($bitrate)
 * @method string getBitrate()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setRemove($remove)
 * @method string getRemove()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setIsDefault($isDefault)
 * @method string getIsDefault()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class UpdateAudioTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserAvgCountByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListAudioConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setUpdateContent($updateContent)
 * @method string getUpdateContent()
 */
class UpdateImageInfos extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class GetEditingProject extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class DescribeVodDomainConfigs extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setdata($data)
 * @method string getdata()
 */
class QueryOrderParam extends Request
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
class DescribeVodDomainHitRateData extends Request
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
class DescribeVodDomainISPData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setstatus($status)
 * @method string getstatus()
 */
class UpdateMediaInfoStatus extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setConfigs($configs)
 * @method string getConfigs()
 */
class UpdateCustomTemplateAndGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class Modify extends Request
{
}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setContractNo($contractNo)
 * @method string getContractNo()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setLicenseSignature($licenseSignature)
 * @method string getLicenseSignature()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFeature($feature)
 * @method string getFeature()
 * @method $this setExpiredOn($expiredOn)
 * @method string getExpiredOn()
 * @method $this setSdkIds($sdkIds)
 * @method string getSdkIds()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 * @method $this setLicenseId($licenseId)
 * @method int getLicenseId()
 * @method $this setCreateTime($createTime)
 * @method string getCreateTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class AddAppLicense extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 */
class DeleteCustomTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetWatermarkGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setType($type)
 * @method string getType()
 */
class GetEditingProjectMaterials extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 */
class GetVodTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class DeleteCategory extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProjectIds($projectIds)
 * @method string getProjectIds()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateEditingProjectStatus extends Request
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
 * @method $this setType($type)
 * @method string getType()
 * @method $this setArea($area)
 * @method string getArea()
 * @method $this setField($field)
 * @method string getField()
 */
class DescribeVodDomainUsageData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DisplayAIAuditSwitch extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setPlayURL($playURL)
 * @method string getPlayURL()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetMediaStream extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setHorizontalOffet($horizontalOffet)
 * @method string getHorizontalOffet()
 * @method $this setHorizontalOffset($horizontalOffset)
 * @method string getHorizontalOffset()
 * @method $this setVerticalOffset($verticalOffset)
 * @method string getVerticalOffset()
 * @method $this setPosition($position)
 * @method string getPosition()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setObject($object)
 * @method string getObject()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 * @method $this setScreenMode($screenMode)
 * @method string getScreenMode()
 * @method $this setVideoWidth($videoWidth)
 * @method int getVideoWidth()
 * @method $this setVideoHeight($videoHeight)
 * @method int getVideoHeight()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setScreenWidth($screenWidth)
 * @method int getScreenWidth()
 * @method $this setScreenHeight($screenHeight)
 * @method int getScreenHeight()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class UpdateWatermark extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setPropertyName($propertyName)
 * @method string getPropertyName()
 * @method $this setPropertyValue($propertyValue)
 * @method string getPropertyValue()
 */
class SetTemplateGroupProperty extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class DeleteMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 * @method $this setLevel($level)
 * @method int getLevel()
 * @method $this setUrl($url)
 * @method string getUrl()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 */
class SPICheckResourceAction extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setproduct($product)
 * @method string getproduct()
 * @method $this setversion($version)
 * @method string getversion()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdomain($domain)
 * @method string getdomain()
 * @method $this setdata($data)
 * @method string getdata()
 */
class PayOrderCallback extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setStorageStatus($storageStatus)
 * @method string getStorageStatus()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetStorageList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteAITemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class GetMediaDNAResult extends Request
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
class DescribeVodRefreshTasks extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class AddStorage extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetOSSStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeVodRefreshQuota extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setReferType($referType)
 * @method string getReferType()
 * @method $this setReferList($referList)
 * @method string getReferList()
 * @method $this setAllowEmpty($allowEmpty)
 * @method string getAllowEmpty()
 */
class SetCDNReferer extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 */
class GetDefaultAITemplate extends Request
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
 * @method $this setPercent($percent)
 * @method string getPercent()
 */
class DescribeVodDomainTopReferVisit extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setLegalSwitch($legalSwitch)
 * @method string getLegalSwitch()
 */
class SetCheckChannel extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetStorageRegionList extends Request
{
}/**
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 */
class ListAuditSecurityIp extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class GetWatermarkInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class DeleteMediaInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetTotalStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeVodUserResourcePackage extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class AddMediaTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeVodService extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class RefreshMaterialWorkFlow extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class SubmitAIMediaAuditJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetDomainList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UserExist extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class SetDefaultUploadStorage extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIASRConfig($aIASRConfig)
 * @method string getAIASRConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIASRJob extends Request
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
class DescribeVodDomainQpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetCustomerTranscodeConf extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setYkVid($ykVid)
 * @method string getYkVid()
 */
class DeleteMidYKVid extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setScope($scope)
 * @method string getScope()
 */
class AddVodDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($aPIProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($aPIProxyParam)
 * @method string getAPIProxyParam()
 */
class SetCDNDomainServerCertificate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 * @method $this setAdditionType($additionType)
 * @method string getAdditionType()
 */
class GetMezzanineInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class DeleteVideo extends Request
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
class DescribeVodDomainPvData extends Request
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
class DescribeVodDomainRealTimeSrcTrafficData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserUvByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMuxer($muxer)
 * @method string getMuxer()
 * @method $this setResolution($resolution)
 * @method string getResolution()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setVideoBitrate($videoBitrate)
 * @method string getVideoBitrate()
 * @method $this setVideoCodec($videoCodec)
 * @method string getVideoCodec()
 * @method $this setAudioBitrate($audioBitrate)
 * @method string getAudioBitrate()
 * @method $this setAudioCodec($audioCodec)
 * @method string getAudioCodec()
 */
class AddTranscodeTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeVodUserQuota extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setTranscodeGroupId($transcodeGroupId)
 * @method string getTranscodeGroupId()
 * @method $this setResourceInfo($resourceInfo)
 * @method string getResourceInfo()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class AddLiveStreamVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoTerrorismRecogConfig($aIVideoTerrorismRecogConfig)
 * @method string getAIVideoTerrorismRecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoTerrorismRecogJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class NotifyInitResource extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setMediaExt($mediaExt)
 * @method string getMediaExt()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileSize($fileSize)
 * @method string getFileSize()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CreateUploadAttachedMedia extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 */
class ListVodTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDownloadSwitch($downloadSwitch)
 * @method string getDownloadSwitch()
 * @method $this setMetricConfig($metricConfig)
 * @method string getMetricConfig()
 * @method $this setAIConfig($aIConfig)
 * @method string getAIConfig()
 */
class SetCustomerConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLogDay($logDay)
 * @method string getLogDay()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class DescribeCdnDomainLogs extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setPreprocessType($preprocessType)
 * @method string getPreprocessType()
 */
class SubmitPreprocessJobs extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SearchMediaInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 */
class GetMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class AssumeSlsRole extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListAIStatisType extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class DeleteStorage extends Request
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
class SetVodDomainCertificate extends Request
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
class DescribeVodDomainBpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class DeleteStream extends Request
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
class DeleteVodDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class GetWatermark extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSource($source)
 * @method string getSource()
 */
class GetMaterialList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetCustomerConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setAPIProxyName($aPIProxyName)
 * @method string getAPIProxyName()
 * @method $this setAPIProxyParam($aPIProxyParam)
 * @method string getAPIProxyParam()
 */
class APIProxy extends Request
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
class DescribeVodDomainTrafficData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 * @method $this setResultTypes($resultTypes)
 * @method string getResultTypes()
 * @method $this setPlayRand($playRand)
 * @method string getPlayRand()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setApiVersion($apiVersion)
 * @method string getApiVersion()
 * @method $this setScrollToken($scrollToken)
 * @method string getScrollToken()
 * @method $this setPreprocessStatus($preprocessStatus)
 * @method string getPreprocessStatus()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class SearchVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetMediaAuditResult extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererType($refererType)
 * @method string getRefererType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDomainReferer extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 * @method $this setFormats($formats)
 * @method string getFormats()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setRand($rand)
 * @method string getRand()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setPlayerVersion($playerVersion)
 * @method string getPlayerVersion()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setReAuthInfo($reAuthInfo)
 * @method string getReAuthInfo()
 */
class GetBatchPlayInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setPrivilege($privilege)
 * @method int getPrivilege()
 * @method $this setIP($iP)
 * @method string getIP()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileMd5($fileMd5)
 * @method string getFileMd5()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowUserData($mediaWorkflowUserData)
 * @method string getMediaWorkflowUserData()
 * @method $this setMediaWorkflowRunId($mediaWorkflowRunId)
 * @method string getMediaWorkflowRunId()
 */
class AddMediaInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setImageType($imageType)
 * @method string getImageType()
 * @method $this setImageExt($imageExt)
 * @method string getImageExt()
 * @method $this setOriginalFileName($originalFileName)
 * @method string getOriginalFileName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateUploadImage extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRefererType($refererType)
 * @method string getRefererType()
 * @method $this setRefererList($refererList)
 * @method string getRefererList()
 */
class AddDomainReferer extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setKey1($key1)
 * @method string getKey1()
 * @method $this setKey2($key2)
 * @method string getKey2()
 * @method $this setTimeout($timeout)
 * @method string getTimeout()
 */
class SetDomainAuth extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopVodDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoSummaryConfig($aIVideoSummaryConfig)
 * @method string getAIVideoSummaryConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoSummaryJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCustomerId($customerId)
 * @method string getCustomerId()
 */
class AddPipeline extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setState($state)
 * @method int getState()
 * @method $this setPlayKey($playKey)
 * @method string getPlayKey()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setSource($source)
 * @method string getSource()
 */
class AddApiAuth extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setClientTS($clientTS)
 * @method int getClientTS()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setPlaySign($playSign)
 * @method string getPlaySign()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class GetVideoPlayInfoForCloud extends Request
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
 * @method $this setPercent($percent)
 * @method string getPercent()
 */
class DescribeVodDomainTopUrlVisit extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setWatermarkGroupId($watermarkGroupId)
 * @method string getWatermarkGroupId()
 * @method $this setWatermarkIds($watermarkIds)
 * @method string getWatermarkIds()
 */
class DeleteWatermarkRelation extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetImageInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class GetTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setWorkFlowId($workFlowId)
 * @method string getWorkFlowId()
 */
class InitCustomerWithSystemTemplateAndGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class RefreshUploadVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCensorConfig($aIVideoCensorConfig)
 * @method string getAIVideoCensorConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoCensorJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeCdnRefreshQuota extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkType($watermarkType)
 * @method string getWatermarkType()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 * @method $this setMediaFileId($mediaFileId)
 * @method string getMediaFileId()
 * @method $this setWatermarkName($watermarkName)
 * @method string getWatermarkName()
 */
class UpdateWatermarkInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class DeleteWatermark extends Request
{
}/**
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setIps($ips)
 * @method string getIps()
 * @method $this setOperateMode($operateMode)
 * @method string getOperateMode()
 */
class SetAuditSecurityIp extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setFormats($formats)
 * @method string getFormats()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setRand($rand)
 * @method string getRand()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setPlayerVersion($playerVersion)
 * @method string getPlayerVersion()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setReAuthInfo($reAuthInfo)
 * @method string getReAuthInfo()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setResultType($resultType)
 * @method string getResultType()
 * @method $this setPlayConfig($playConfig)
 * @method string getPlayConfig()
 */
class GetPlayInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 */
class DescribeDomainBpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setConfigs($configs)
 * @method string getConfigs()
 */
class AddCustomTemplateAndGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetMTSStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setSearchType($searchType)
 * @method string getSearchType()
 * @method $this setFields($fields)
 * @method string getFields()
 * @method $this setMatch($match)
 * @method string getMatch()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setScrollToken($scrollToken)
 * @method string getScrollToken()
 * @method $this setResultTypes($resultTypes)
 * @method string getResultTypes()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 */
class SearchMedia extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setPrefix($prefix)
 * @method string getPrefix()
 * @method $this setMaxKeys($maxKeys)
 * @method string getMaxKeys()
 */
class GetPersonalStorageList extends Request
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
class DescribeVodTopDomainsByFlow extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetCategories extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDeleteImageType($deleteImageType)
 * @method string getDeleteImageType()
 * @method $this setImageURLs($imageURLs)
 * @method string getImageURLs()
 * @method $this setImageIds($imageIds)
 * @method string getImageIds()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setImageType($imageType)
 * @method string getImageType()
 */
class DeleteImage extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetAIMediaAuditJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class AddOriginTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetAuditResultDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 */
class UpdateCategoryName extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class DescribePlayVideoStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 */
class DeleteVodTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setAuthInfoTimeout($authInfoTimeout)
 * @method int getAuthInfoTimeout()
 * @method $this setReAuthInfo($reAuthInfo)
 * @method string getReAuthInfo()
 * @method $this setPlayConfig($playConfig)
 * @method string getPlayConfig()
 */
class GetVideoPlayAuth extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class InitSystemTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setIsContainsTemplates($isContainsTemplates)
 * @method bool getIsContainsTemplates()
 */
class ListTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetDomainAuth extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setLicenseId($licenseId)
 * @method int getLicenseId()
 * @method $this setContractNo($contractNo)
 * @method string getContractNo()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setLicenseSignature($licenseSignature)
 * @method string getLicenseSignature()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFeature($feature)
 * @method string getFeature()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setExpiredOn($expiredOn)
 * @method string getExpiredOn()
 * @method $this setSdkIds($sdkIds)
 * @method string getSdkIds()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAccountId($accountId)
 * @method int getAccountId()
 */
class UpdateAppLicense extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setToNeedTranscode($toNeedTranscode)
 * @method string getToNeedTranscode()
 */
class AddTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetWatermarks extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 */
class RefreshUploadMaterialToken extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class GetMediaInfoList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setKmsRegionId($kmsRegionId)
 * @method string getKmsRegionId()
 */
class CreateKMSServiceKey extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPrivateOssAuth($privateOssAuth)
 * @method string getPrivateOssAuth()
 */
class SetL2OssKeyConfig extends Request
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
class DescribeVodDomainRealTimeQpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 */
class DescribeDomainFlowData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodCertificateList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class DescribeVodCertificateDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class ListLiveRecordVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class GetAITemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoSummaryJobIds($aIVideoSummaryJobIds)
 * @method string getAIVideoSummaryJobIds()
 */
class ListAIVideoSummaryJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeUserAvgTimeByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetAIStatis extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCompanionResourceId($companionResourceId)
 * @method string getCompanionResourceId()
 */
class GetCompanionresourceInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class UpdateAITemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkType($watermarkType)
 * @method string getWatermarkType()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setWatermarkName($watermarkName)
 * @method string getWatermarkName()
 * @method $this setMediaFileId($mediaFileId)
 * @method string getMediaFileId()
 */
class AddWatermarkInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class SPIPhysicalDeleteResourceAction extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateMaterialStatus extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setSpecifiedOffsetTime($specifiedOffsetTime)
 * @method int getSpecifiedOffsetTime()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setSpriteSnapshotConfig($spriteSnapshotConfig)
 * @method string getSpriteSnapshotConfig()
 * @method $this setSnapshotTemplateId($snapshotTemplateId)
 * @method string getSnapshotTemplateId()
 */
class SubmitSnapshotJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setClientId($clientId)
 * @method string getClientId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setTerminalType($terminalType)
 * @method string getTerminalType()
 * @method $this setDeviceModel($deviceModel)
 * @method string getDeviceModel()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setUploadInfoList($uploadInfoList)
 * @method string getUploadInfoList()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setUploadAddress($uploadAddress)
 * @method string getUploadAddress()
 */
class GetUploadProgress extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GetCategoryTree extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListAllCategory extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVodTemplateId($vodTemplateId)
 * @method string getVodTemplateId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateConfig($templateConfig)
 * @method string getTemplateConfig()
 */
class UpdateVodTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setContentId($contentId)
 * @method string getContentId()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setAuthTimestamp($authTimestamp)
 * @method int getAuthTimestamp()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 */
class GetThirdPartPlayPolicy extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkType($watermarkType)
 * @method string getWatermarkType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListWatermarkInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class AddAudioConfig extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class SearchEditingProject extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoCategoryJobIds($aIVideoCategoryJobIds)
 * @method string getAIVideoCategoryJobIds()
 */
class ListAIVideoCategoryJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteAudioTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CategoryTree extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setLicenseId($licenseId)
 * @method int getLicenseId()
 */
class GetAppLicense extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setIP($iP)
 * @method string getIP()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 */
class CreateUploadVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setState($state)
 * @method int getState()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetPlayChannelList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setIsLocked($isLocked)
 * @method string getIsLocked()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class UpdateTemplateGroupDaemon extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCookie($cookie)
 * @method string getCookie()
 */
class AssumeExperienceRole extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetServiceStatus extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAutoCompose($autoCompose)
 * @method string getAutoCompose()
 * @method $this setTranscodeGroupId($transcodeGroupId)
 * @method string getTranscodeGroupId()
 */
class FinishLiveStreamRecord extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setUploadURLs($uploadURLs)
 * @method string getUploadURLs()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setUploadMetadatas($uploadMetadatas)
 * @method string getUploadMetadatas()
 * @method $this setPriority($priority)
 * @method string getPriority()
 * @method $this setMessageCallback($messageCallback)
 * @method string getMessageCallback()
 */
class UploadMediaByURL extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setChannel($channel)
 * @method string getChannel()
 * @method $this setClientTS($clientTS)
 * @method int getClientTS()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setPlaySign($playSign)
 * @method string getPlaySign()
 * @method $this setSignVersion($signVersion)
 * @method string getSignVersion()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class GetVideoPlayInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class SetDefaultPlayDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCategoryConfig($aIVideoCategoryConfig)
 * @method string getAIVideoCategoryConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoCategoryJob extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setToNeedTranscode($toNeedTranscode)
 * @method string getToNeedTranscode()
 */
class UpdateTemplateGroup extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeUserVodStatus extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 * @method $this setCheckStatus($checkStatus)
 * @method string getCheckStatus()
 * @method $this setCheckReason($checkReason)
 * @method string getCheckReason()
 */
class CheckVideo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class DeleteMediaTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setSdkCode($sdkCode)
 * @method int getSdkCode()
 * @method $this setLicenseVersion($licenseVersion)
 * @method int getLicenseVersion()
 * @method $this setPlatform($platform)
 * @method int getPlatform()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setLicenseSignature($licenseSignature)
 * @method string getLicenseSignature()
 * @method $this setNonce($nonce)
 * @method string getNonce()
 * @method $this setTime($time)
 * @method int getTime()
 * @method $this setSign($sign)
 * @method string getSign()
 * @method $this setSdkVersion($sdkVersion)
 * @method string getSdkVersion()
 * @method $this setSdkVersionCode($sdkVersionCode)
 * @method int getSdkVersionCode()
 */
class AuthorizeAppLicense extends Request
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
class DescribeVodDomainRealTimeBpsData extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class GetVideoDNAResult extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setDownloadSwitch($downloadSwitch)
 * @method string getDownloadSwitch()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setDuration($duration)
 * @method string getDuration()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 * @method $this setSource($source)
 * @method string getSource()
 */
class UpdateVideoInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 */
class GetMediaInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetMediaAuditResultDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setBizdate($bizdate)
 * @method string getBizdate()
 */
class DescribeUserVvTopByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTypes($types)
 * @method string getTypes()
 */
class GetAIService extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setYKCloudVid($yKCloudVid)
 * @method string getYKCloudVid()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setYKVideoId($yKVideoId)
 * @method string getYKVideoId()
 */
class AddMidYKVid extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setHorizontalOffet($horizontalOffet)
 * @method string getHorizontalOffet()
 * @method $this setHorizontalOffset($horizontalOffset)
 * @method string getHorizontalOffset()
 * @method $this setVerticalOffset($verticalOffset)
 * @method string getVerticalOffset()
 * @method $this setPosition($position)
 * @method string getPosition()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setObject($object)
 * @method string getObject()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWidth($width)
 * @method string getWidth()
 * @method $this setHeight($height)
 * @method string getHeight()
 * @method $this setActive($active)
 * @method string getActive()
 * @method $this setScreenMode($screenMode)
 * @method string getScreenMode()
 * @method $this setVideoWidth($videoWidth)
 * @method int getVideoWidth()
 * @method $this setVideoHeight($videoHeight)
 * @method int getVideoHeight()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 * @method $this setScreenWidth($screenWidth)
 * @method int getScreenWidth()
 * @method $this setScreenHeight($screenHeight)
 * @method int getScreenHeight()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class AddWatermark extends Request
{
}
