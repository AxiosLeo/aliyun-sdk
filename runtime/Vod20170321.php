<?php

namespace aliyun\sdk\services\Vod20170321;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170321
 *
 * @package aliyun\sdk\services\Vod20170321
 * @method UpdateMaterial UpdateMaterial()
 * @method GetOSSFlowStatis GetOSSFlowStatis()
 * @method DescribeVodUserBillPrediction DescribeVodUserBillPrediction()
 * @method DescribeVodDomainRealTimeHttpCodeData DescribeVodDomainRealTimeHttpCodeData()
 * @method DescribeVodDomainRealTimeReqHitRateData DescribeVodDomainRealTimeReqHitRateData()
 * @method GetStorageInfo GetStorageInfo()
 * @method AddCategory AddCategory()
 * @method SetDefaultTranscodeTemplateGroup SetDefaultTranscodeTemplateGroup()
 * @method SubmitAIVideoPornRecogJob SubmitAIVideoPornRecogJob()
 * @method DescribeVodDomainDetail DescribeVodDomainDetail()
 * @method UpdateAttachedMediaInfos UpdateAttachedMediaInfos()
 * @method UpdateEditingProject UpdateEditingProject()
 * @method BatchStartVodDomain BatchStartVodDomain()
 * @method SetAIService SetAIService()
 * @method ListSnapshots ListSnapshots()
 * @method ListTemplateGroupConsole ListTemplateGroupConsole()
 * @method UpdateCategory UpdateCategory()
 * @method PreloadVodObjectCaches PreloadVodObjectCaches()
 * @method DescribeUserTimeRangeByDay DescribeUserTimeRangeByDay()
 * @method DescribeVodDomainRegionData DescribeVodDomainRegionData()
 * @method RefreshVodObjectCaches RefreshVodObjectCaches()
 * @method DescribeVodDomainRealTimeByteHitRateData DescribeVodDomainRealTimeByteHitRateData()
 * @method CreateUploadMaterial CreateUploadMaterial()
 * @method ListTranscodeTask ListTranscodeTask()
 * @method AddEditingProject AddEditingProject()
 * @method UpdateVodDomain UpdateVodDomain()
 * @method ListAIVideoCoverJob ListAIVideoCoverJob()
 * @method SearchMaterial SearchMaterial()
 * @method DescribeVodDomainCertificateInfo DescribeVodDomainCertificateInfo()
 * @method DescribeVodDomainsUsageByDay DescribeVodDomainsUsageByDay()
 * @method AddVodTemplate AddVodTemplate()
 * @method GetCheckChannel GetCheckChannel()
 * @method SetEditingProjectMaterials SetEditingProjectMaterials()
 * @method SetMessageCallback SetMessageCallback()
 * @method DeleteWatermarkConsole DeleteWatermarkConsole()
 * @method GetURLUploadInfos GetURLUploadInfos()
 * @method UpdateCustomTemplateAndGroupConsole UpdateCustomTemplateAndGroupConsole()
 * @method GetMediaAuditResultTimeline GetMediaAuditResultTimeline()
 * @method ProduceEditingProjectVideo ProduceEditingProjectVideo()
 * @method DescribeUserVvByVideoid DescribeUserVvByVideoid()
 * @method ListAppPoliciesForIdentity ListAppPoliciesForIdentity()
 * @method GenerateDownloadSecretKey GenerateDownloadSecretKey()
 * @method DescribeVodDomainRealTimeSrcBpsData DescribeVodDomainRealTimeSrcBpsData()
 * @method DeleteEditingProject DeleteEditingProject()
 * @method SubmitAIJob SubmitAIJob()
 * @method AssumeOssRole AssumeOssRole()
 * @method GetVideoConfig GetVideoConfig()
 * @method DescribeVodDomainSrcBpsData DescribeVodDomainSrcBpsData()
 * @method AddMediaSequences AddMediaSequences()
 * @method GetAuditHistory GetAuditHistory()
 * @method SubmitPreprocessJobsConsole SubmitPreprocessJobsConsole()
 * @method DescribeVodDomainCname DescribeVodDomainCname()
 * @method GetCDNStatis GetCDNStatis()
 * @method ListAIVideoPornRecogJob ListAIVideoPornRecogJob()
 * @method GetMessageCallback GetMessageCallback()
 * @method GetVideoInfo GetVideoInfo()
 * @method ListAITemplate ListAITemplate()
 * @method SetDefaultVodTemplate SetDefaultVodTemplate()
 * @method StartVodDomain StartVodDomain()
 * @method GetMessageCallbackEventList GetMessageCallbackEventList()
 * @method ListAIJob ListAIJob()
 * @method RefreshObjectCaches RefreshObjectCaches()
 * @method CreateOrder CreateOrder()
 * @method SetDefaultAITemplate SetDefaultAITemplate()
 * @method SubmitAIVideoCoverJob SubmitAIVideoCoverJob()
 * @method GetTranscodeSummary GetTranscodeSummary()
 * @method ListAIASRJob ListAIASRJob()
 * @method DeleteMultipartUpload DeleteMultipartUpload()
 * @method CreateAppPolicy CreateAppPolicy()
 * @method GetAttachedMediaInfo GetAttachedMediaInfo()
 * @method AddAITemplate AddAITemplate()
 * @method DeleteTranscodeTemplateGroup DeleteTranscodeTemplateGroup()
 * @method ListAIVideoTagJob ListAIVideoTagJob()
 * @method CreateAudit CreateAudit()
 * @method GetCDNStatisSum GetCDNStatisSum()
 * @method GetWorkflow GetWorkflow()
 * @method GetAppInfos GetAppInfos()
 * @method MoveAppResource MoveAppResource()
 * @method DescribeVodDomainUvData DescribeVodDomainUvData()
 * @method SubmitTranscodeJobs SubmitTranscodeJobs()
 * @method SetStorageACL SetStorageACL()
 * @method GetVideoList GetVideoList()
 * @method DescribeVodDomainSrcTrafficData DescribeVodDomainSrcTrafficData()
 * @method GetAuditResult GetAuditResult()
 * @method DescribeVodDomainLog DescribeVodDomainLog()
 * @method ControlVodAppService ControlVodAppService()
 * @method DescribePlayTopVideos DescribePlayTopVideos()
 * @method ListAIVideoCensorJob ListAIVideoCensorJob()
 * @method DescribeRefreshTasks DescribeRefreshTasks()
 * @method OpenVodService OpenVodService()
 * @method SetDefaultWatermark SetDefaultWatermark()
 * @method DescribeUserVvByDay DescribeUserVvByDay()
 * @method FaceRegistration FaceRegistration()
 * @method ListAIVideoTerrorismRecogJob ListAIVideoTerrorismRecogJob()
 * @method GetWatermarkConsole GetWatermarkConsole()
 * @method DeleteMezzanines DeleteMezzanines()
 * @method AttachAppPolicyToIdentity AttachAppPolicyToIdentity()
 * @method DescribePlayUserTotal DescribePlayUserTotal()
 * @method DescribeVodDomainHttpCodeData DescribeVodDomainHttpCodeData()
 * @method UpdateVideoInfos UpdateVideoInfos()
 * @method DescribeVodUserDomains DescribeVodUserDomains()
 * @method GetVideoInfos GetVideoInfos()
 * @method DescribeVodDomainRealTimeTrafficData DescribeVodDomainRealTimeTrafficData()
 * @method UpdateAppPolicy UpdateAppPolicy()
 * @method EditVideoIndexFile EditVideoIndexFile()
 * @method SyncMaterial SyncMaterial()
 * @method DescribeUserAvgCountByDay DescribeUserAvgCountByDay()
 * @method UpdateImageInfos UpdateImageInfos()
 * @method AddEditingProjectMaterials AddEditingProjectMaterials()
 * @method ListWatermark ListWatermark()
 * @method GetEditingProject GetEditingProject()
 * @method DescribeVodDomainConfigs DescribeVodDomainConfigs()
 * @method DescribeVodDomainHitRateData DescribeVodDomainHitRateData()
 * @method DescribeVodDomainISPData DescribeVodDomainISPData()
 * @method PushObjectCache PushObjectCache()
 * @method AddWatermarkConsole AddWatermarkConsole()
 * @method UpdateWatermarkConsole UpdateWatermarkConsole()
 * @method ListAppPolicy ListAppPolicy()
 * @method GetEditingProjectMaterials GetEditingProjectMaterials()
 * @method GetVodTemplate GetVodTemplate()
 * @method DeleteCategory DeleteCategory()
 * @method DeleteAttachedMedia DeleteAttachedMedia()
 * @method DescribeVodDomainUsageData DescribeVodDomainUsageData()
 * @method DisplayAIAuditSwitch DisplayAIAuditSwitch()
 * @method UpdateWatermark UpdateWatermark()
 * @method DeleteTranscodeTemplates DeleteTranscodeTemplates()
 * @method DeleteMaterial DeleteMaterial()
 * @method GetTranscodeTask GetTranscodeTask()
 * @method ReportUploadProgress ReportUploadProgress()
 * @method GetStorageList GetStorageList()
 * @method DeleteAITemplate DeleteAITemplate()
 * @method GetMediaDNAResult GetMediaDNAResult()
 * @method DescribeVodRefreshTasks DescribeVodRefreshTasks()
 * @method AddStorage AddStorage()
 * @method GetOSSStatis GetOSSStatis()
 * @method UpdateTranscodeTemplateGroup UpdateTranscodeTemplateGroup()
 * @method DescribeVodRefreshQuota DescribeVodRefreshQuota()
 * @method GetDefaultAITemplate GetDefaultAITemplate()
 * @method DescribeVodDomainTopReferVisit DescribeVodDomainTopReferVisit()
 * @method SetCheckChannel SetCheckChannel()
 * @method GetStorageRegionList GetStorageRegionList()
 * @method ListAuditSecurityIp ListAuditSecurityIp()
 * @method RegisterMedia RegisterMedia()
 * @method SubmitAIVideoFaceRecogJob SubmitAIVideoFaceRecogJob()
 * @method GetTotalStatis GetTotalStatis()
 * @method DescribeVodUserResourcePackage DescribeVodUserResourcePackage()
 * @method DescribeVodService DescribeVodService()
 * @method SubmitAIMediaAuditJob SubmitAIMediaAuditJob()
 * @method GetAppPolicies GetAppPolicies()
 * @method SetDefaultUploadStorage SetDefaultUploadStorage()
 * @method SubmitAIASRJob SubmitAIASRJob()
 * @method DescribeVodDomainQpsData DescribeVodDomainQpsData()
 * @method AddVodDomain AddVodDomain()
 * @method GetMezzanineInfo GetMezzanineInfo()
 * @method DeleteVideo DeleteVideo()
 * @method DetachAppPolicyFromIdentity DetachAppPolicyFromIdentity()
 * @method DescribeVodDomainPvData DescribeVodDomainPvData()
 * @method DescribeVodDomainRealTimeSrcTrafficData DescribeVodDomainRealTimeSrcTrafficData()
 * @method DescribeUserUvByDay DescribeUserUvByDay()
 * @method DescribeVodUserQuota DescribeVodUserQuota()
 * @method DeleteWorkflow DeleteWorkflow()
 * @method SubmitAIVideoTerrorismRecogJob SubmitAIVideoTerrorismRecogJob()
 * @method CreateUploadAttachedMedia CreateUploadAttachedMedia()
 * @method ListVodTemplate ListVodTemplate()
 * @method SetCustomerConfig SetCustomerConfig()
 * @method DescribeCdnDomainLogs DescribeCdnDomainLogs()
 * @method ListAppInfo ListAppInfo()
 * @method BatchSetVodDomainConfigs BatchSetVodDomainConfigs()
 * @method UpdateAppInfo UpdateAppInfo()
 * @method ListWorkflow ListWorkflow()
 * @method SubmitPreprocessJobs SubmitPreprocessJobs()
 * @method DeleteAppInfo DeleteAppInfo()
 * @method DeleteVodSpecificConfig DeleteVodSpecificConfig()
 * @method GetMaterial GetMaterial()
 * @method AssumeSlsRole AssumeSlsRole()
 * @method CreateAppInfo CreateAppInfo()
 * @method DescribeRefreshQuota DescribeRefreshQuota()
 * @method ListAIStatisType ListAIStatisType()
 * @method DeleteStorage DeleteStorage()
 * @method SetVodDomainCertificate SetVodDomainCertificate()
 * @method DescribeVodDomainBpsData DescribeVodDomainBpsData()
 * @method ListAIVideoFaceRecogJob ListAIVideoFaceRecogJob()
 * @method DeleteStream DeleteStream()
 * @method DeleteVodDomain DeleteVodDomain()
 * @method SubmitDNAInitializationJob SubmitDNAInitializationJob()
 * @method GetWatermark GetWatermark()
 * @method GetCustomerConfig GetCustomerConfig()
 * @method DescribeVodDomainTrafficData DescribeVodDomainTrafficData()
 * @method GetMediaAuditResult GetMediaAuditResult()
 * @method AddCustomTemplateAndGroupConsole AddCustomTemplateAndGroupConsole()
 * @method CreateUploadImage CreateUploadImage()
 * @method StopVodDomain StopVodDomain()
 * @method BatchStopVodDomain BatchStopVodDomain()
 * @method SubmitAIVideoSummaryJob SubmitAIVideoSummaryJob()
 * @method DescribeVodDomainTopUrlVisit DescribeVodDomainTopUrlVisit()
 * @method GetImageInfo GetImageInfo()
 * @method RefreshUploadVideo RefreshUploadVideo()
 * @method SubmitAIVideoCensorJob SubmitAIVideoCensorJob()
 * @method DeleteMessageCallback DeleteMessageCallback()
 * @method DeleteWatermark DeleteWatermark()
 * @method GetTemplateGroupConsole GetTemplateGroupConsole()
 * @method SetAuditSecurityIp SetAuditSecurityIp()
 * @method GetPlayInfo GetPlayInfo()
 * @method DescribeDomainBpsData DescribeDomainBpsData()
 * @method GetMTSStatis GetMTSStatis()
 * @method SearchMedia SearchMedia()
 * @method GetPersonalStorageList GetPersonalStorageList()
 * @method DescribeVodTopDomainsByFlow DescribeVodTopDomainsByFlow()
 * @method AddTranscodeTemplateGroup AddTranscodeTemplateGroup()
 * @method GetCategories GetCategories()
 * @method DeleteImage DeleteImage()
 * @method GetAIMediaAuditJob GetAIMediaAuditJob()
 * @method GetAuditResultDetail GetAuditResultDetail()
 * @method DescribePlayVideoStatis DescribePlayVideoStatis()
 * @method DescribePlayUserAvg DescribePlayUserAvg()
 * @method DeleteVodTemplate DeleteVodTemplate()
 * @method GetVideoPlayAuth GetVideoPlayAuth()
 * @method CreateMedia CreateMedia()
 * @method ListTemplateGroup ListTemplateGroup()
 * @method RefreshUploadMaterialToken RefreshUploadMaterialToken()
 * @method SetL2OssKeyConfig SetL2OssKeyConfig()
 * @method DescribeVodDomainRealTimeQpsData DescribeVodDomainRealTimeQpsData()
 * @method SetDefaultWatermarkConsole SetDefaultWatermarkConsole()
 * @method DeleteCustomTemplateConsole DeleteCustomTemplateConsole()
 * @method DescribeDomainFlowData DescribeDomainFlowData()
 * @method DescribeVodCertificateList DescribeVodCertificateList()
 * @method DescribeVodCertificateDetail DescribeVodCertificateDetail()
 * @method ListLiveRecordVideo ListLiveRecordVideo()
 * @method DeleteAppPolicy DeleteAppPolicy()
 * @method SubmitAIVideoTagJob SubmitAIVideoTagJob()
 * @method GetAITemplate GetAITemplate()
 * @method ListAIVideoSummaryJob ListAIVideoSummaryJob()
 * @method DescribeUserAvgTimeByDay DescribeUserAvgTimeByDay()
 * @method CreateVodUserUsageDetailDataExportTask CreateVodUserUsageDetailDataExportTask()
 * @method GetAIStatis GetAIStatis()
 * @method DescribeVodUserUsageDetailDataExportTask DescribeVodUserUsageDetailDataExportTask()
 * @method UpdateWorkflow UpdateWorkflow()
 * @method UpdateAITemplate UpdateAITemplate()
 * @method SubmitSnapshotJob SubmitSnapshotJob()
 * @method GetUploadProgress GetUploadProgress()
 * @method UpdateVodTemplate UpdateVodTemplate()
 * @method SearchEditingProject SearchEditingProject()
 * @method ListTranscodeTemplateGroup ListTranscodeTemplateGroup()
 * @method DeleteTemplateGroupConsole DeleteTemplateGroupConsole()
 * @method ListAIVideoCategoryJob ListAIVideoCategoryJob()
 * @method DeleteEditingProjectMaterials DeleteEditingProjectMaterials()
 * @method AddWorkflow AddWorkflow()
 * @method GetTranscodeTemplateGroup GetTranscodeTemplateGroup()
 * @method CreateUploadVideo CreateUploadVideo()
 * @method GetWatermarksConsole GetWatermarksConsole()
 * @method AssumeExperienceRole AssumeExperienceRole()
 * @method UploadMediaByURL UploadMediaByURL()
 * @method GetVideoPlayInfo GetVideoPlayInfo()
 * @method SetDefaultPlayDomain SetDefaultPlayDomain()
 * @method SubmitAIVideoCategoryJob SubmitAIVideoCategoryJob()
 * @method DescribeUserVodStatus DescribeUserVodStatus()
 * @method DescribeVodDomainRealTimeBpsData DescribeVodDomainRealTimeBpsData()
 * @method GetVideoDNAResult GetVideoDNAResult()
 * @method UpdateVideoInfo UpdateVideoInfo()
 * @method SetDefaultTemplateGroupConsole SetDefaultTemplateGroupConsole()
 * @method GetMediaAuditResultDetail GetMediaAuditResultDetail()
 * @method DescribeUserVvTopByDay DescribeUserVvTopByDay()
 * @method GetAIService GetAIService()
 * @method AddWatermark AddWatermark()
 */
class V20170321
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
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateMaterial extends Request
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
 * @method int getOwnerId()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setArea($area)
 * @method string getArea()
 */
class DescribeVodUserBillPrediction extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class SetDefaultTranscodeTemplateGroup extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainDetail extends Request
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
class UpdateAttachedMediaInfos extends Request
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
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 */
class UpdateEditingProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStartVodDomain extends Request
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
class ListTemplateGroupConsole extends Request
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
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class CreateUploadMaterial extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class ListTranscodeTask extends Request
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
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeVodDomainCertificateInfo extends Request
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
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class DeleteWatermarkConsole extends Request
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
 * @method $this setUploadURLs($uploadURLs)
 * @method string getUploadURLs()
 */
class GetURLUploadInfos extends Request
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
class UpdateCustomTemplateAndGroupConsole extends Request
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
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setTimeline($timeline)
 * @method string getTimeline()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setMediaMetadata($mediaMetadata)
 * @method string getMediaMetadata()
 * @method $this setProduceConfig($produceConfig)
 * @method string getProduceConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setIdentityType($identityType)
 * @method string getIdentityType()
 * @method $this setIdentityName($identityName)
 * @method string getIdentityName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListAppPoliciesForIdentity extends Request
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
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setMediaURL($mediaURL)
 * @method string getMediaURL()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 * @method $this setMediaSequences($mediaSequences)
 * @method string getMediaSequences()
 */
class AddMediaSequences extends Request
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
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setPreprocessType($preprocessType)
 * @method string getPreprocessType()
 */
class SubmitPreprocessJobsConsole extends Request
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
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshObjectCaches extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class GetTranscodeSummary extends Request
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
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
 */
class DeleteMultipartUpload extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setPolicyValue($policyValue)
 * @method string getPolicyValue()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateAppPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaIds($mediaIds)
 * @method string getMediaIds()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
 */
class GetAttachedMediaInfo extends Request
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
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 * @method $this setTranscodeTemplateIds($transcodeTemplateIds)
 * @method string getTranscodeTemplateIds()
 * @method $this setForceDelGroup($forceDelGroup)
 * @method string getForceDelGroup()
 */
class DeleteTranscodeTemplateGroup extends Request
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
 * @method $this setAIVideoTagJobIds($aIVideoTagJobIds)
 * @method string getAIVideoTagJobIds()
 */
class ListAIVideoTagJob extends Request
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
 * @method $this setStartStatisTime($startStatisTime)
 * @method string getStartStatisTime()
 * @method $this setEndStatisTime($endStatisTime)
 * @method string getEndStatisTime()
 * @method $this setLevel($level)
 * @method string getLevel()
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
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 */
class GetWorkflow extends Request
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
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 */
class GetAppInfos extends Request
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
 * @method $this setTargetAppId($targetAppId)
 * @method string getTargetAppId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceIds($resourceIds)
 * @method string getResourceIds()
 */
class MoveAppResource extends Request
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
 * @method $this setPriority($priority)
 * @method string getPriority()
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
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
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
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setMediaType($mediaType)
 * @method string getMediaType()
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
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setCommand($command)
 * @method string getCommand()
 */
class ControlVodAppService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setBizDate($bizDate)
 * @method string getBizDate()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePlayTopVideos extends Request
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeRefreshTasks extends Request
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
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class GetWatermarkConsole extends Request
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
 * @method $this setIdentityType($identityType)
 * @method string getIdentityType()
 * @method $this setIdentityName($identityName)
 * @method string getIdentityName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class AttachAppPolicyToIdentity extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribePlayUserTotal extends Request
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
 * @method $this setPolicyName($policyName)
 * @method string getPolicyName()
 * @method $this setPolicyValue($policyValue)
 * @method string getPolicyValue()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateAppPolicy extends Request
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
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 * @method $this setMaterialType($materialType)
 * @method string getMaterialType()
 */
class AddEditingProjectMaterials extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListWatermark extends Request
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
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 */
class PushObjectCache extends Request
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class AddWatermarkConsole extends Request
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 */
class UpdateWatermarkConsole extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppPolicy extends Request
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
 * @method $this setMaterialType($materialType)
 * @method string getMaterialType()
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
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class DeleteCategory extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaIds($mediaIds)
 * @method string getMediaIds()
 */
class DeleteAttachedMedia extends Request
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
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
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
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 * @method $this setTranscodeTemplateIdList($transcodeTemplateIdList)
 * @method string getTranscodeTemplateIdList()
 */
class DeleteTranscodeTemplates extends Request
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
 * @method $this setTranscodeTaskId($transcodeTaskId)
 * @method string getTranscodeTaskId()
 */
class GetTranscodeTask extends Request
{

}/**
 * @method $this setSource($source)
 * @method string getSource()
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setFileCreateTime($fileCreateTime)
 * @method string getFileCreateTime()
 * @method $this setFileHash($fileHash)
 * @method string getFileHash()
 * @method $this setUploadRatio($uploadRatio)
 * @method Float getUploadRatio()
 * @method $this setUploadId($uploadId)
 * @method string getUploadId()
 * @method $this setDonePartsCount($donePartsCount)
 * @method int getDonePartsCount()
 * @method $this setTotalPart($totalPart)
 * @method int getTotalPart()
 * @method $this setPartSize($partSize)
 * @method int getPartSize()
 * @method $this setUploadPoint($uploadPoint)
 * @method string getUploadPoint()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setUploadAddress($uploadAddress)
 * @method string getUploadAddress()
 */
class ReportUploadProgress extends Request
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
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setStorageRegion($storageRegion)
 * @method string getStorageRegion()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
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
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStartTimeUTC($startTimeUTC)
 * @method string getStartTimeUTC()
 * @method $this setEndTimeUTC($endTimeUTC)
 * @method string getEndTimeUTC()
 * @method $this setDivision($division)
 * @method string getDivision()
 */
class GetOSSStatis extends Request
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
 * @method $this setTranscodeTemplateList($transcodeTemplateList)
 * @method string getTranscodeTemplateList()
 * @method $this setLocked($locked)
 * @method string getLocked()
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class UpdateTranscodeTemplateGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeVodRefreshQuota extends Request
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
 * @method $this setRegisterMetadatas($registerMetadatas)
 * @method string getRegisterMetadatas()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setWorkFlowId($workFlowId)
 * @method string getWorkFlowId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class RegisterMedia extends Request
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
 * @method $this setAIVideoFaceRecogConfig($aIVideoFaceRecogConfig)
 * @method string getAIVideoFaceRecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoFaceRecogJob extends Request
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
 * @method int getOwnerId()
 */
class DescribeVodService extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class GetAppPolicies extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoId($videoId)
 * @method string getVideoId()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setPreviewSegment($previewSegment)
 * @method bool getPreviewSegment()
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
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class DeleteVideo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setIdentityType($identityType)
 * @method string getIdentityType()
 * @method $this setIdentityName($identityName)
 * @method string getIdentityName()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class DetachAppPolicyFromIdentity extends Request
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
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 */
class DeleteWorkflow extends Request
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
 * @method $this setFileSize($fileSize)
 * @method string getFileSize()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setCateIds($cateIds)
 * @method string getCateIds()
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
 * @method $this setAuditConfig($auditConfig)
 * @method string getAuditConfig()
 */
class SetCustomerConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
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
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppInfo extends Request
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
class BatchSetVodDomainConfigs extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateAppInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListWorkflow extends Request
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
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteAppInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteVodSpecificConfig extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateAppInfo extends Request
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
class DescribeRefreshQuota extends Request
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
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAIVideoFaceRecogJobIds($aIVideoFaceRecogJobIds)
 * @method string getAIVideoFaceRecogJobIds()
 */
class ListAIVideoFaceRecogJob extends Request
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
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setRecentNumber($recentNumber)
 * @method int getRecentNumber()
 */
class SubmitDNAInitializationJob extends Request
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
class AddCustomTemplateAndGroupConsole extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class CreateUploadImage extends Request
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
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStopVodDomain extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setOutputType($outputType)
 * @method string getOutputType()
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
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method int getResourceRealOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteMessageCallback extends Request
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
class GetTemplateGroupConsole extends Request
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
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTranscodeTemplateList($transcodeTemplateList)
 * @method string getTranscodeTemplateList()
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class AddTranscodeTemplateGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribePlayUserAvg extends Request
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
 * @method $this setMediaMetaDatas($mediaMetaDatas)
 * @method string getMediaMetaDatas()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CreateMedia extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setIsContainsTemplates($isContainsTemplates)
 * @method bool getIsContainsTemplates()
 */
class ListTemplateGroup extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWatermarkId($watermarkId)
 * @method string getWatermarkId()
 */
class SetDefaultWatermarkConsole extends Request
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
class DeleteCustomTemplateConsole extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceRealOwnerId($resourceRealOwnerId)
 * @method string getResourceRealOwnerId()
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
 * @method $this setPolicyNames($policyNames)
 * @method string getPolicyNames()
 */
class DeleteAppPolicy extends Request
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
 * @method $this setAIVideoTagConfig($aIVideoTagConfig)
 * @method string getAIVideoTagConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitAIVideoTagJob extends Request
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
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 */
class CreateVodUserUsageDetailDataExportTask extends Request
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
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class DescribeVodUserUsageDetailDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setActionList($actionList)
 * @method string getActionList()
 */
class UpdateWorkflow extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListTranscodeTemplateGroup extends Request
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
class DeleteTemplateGroupConsole extends Request
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
 * @method $this setMaterialType($materialType)
 * @method string getMaterialType()
 */
class DeleteEditingProjectMaterials extends Request
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
 * @method $this setActionList($actionList)
 * @method string getActionList()
 */
class AddWorkflow extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTranscodeTemplateGroupId($transcodeTemplateGroupId)
 * @method string getTranscodeTemplateGroupId()
 */
class GetTranscodeTemplateGroup extends Request
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
 * @method $this setIP($iP)
 * @method string getIP()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setTranscodeMode($transcodeMode)
 * @method string getTranscodeMode()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setTemplateGroupId($templateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 * @method $this setStorageLocation($storageLocation)
 * @method string getStorageLocation()
 * @method $this setCustomMediaInfo($customMediaInfo)
 * @method string getCustomMediaInfo()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class CreateUploadVideo extends Request
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
 */
class GetWatermarksConsole extends Request
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
 * @method $this setUserData($userData)
 * @method string getUserData()
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
 */
class DescribeUserVodStatus extends Request
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
 * @method $this setCustomMediaInfo($customMediaInfo)
 * @method string getCustomMediaInfo()
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
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupSymbol($groupSymbol)
 * @method string getGroupSymbol()
 */
class SetDefaultTemplateGroupConsole extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setWatermarkConfig($watermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileUrl($fileUrl)
 * @method string getFileUrl()
 */
class AddWatermark extends Request
{

}