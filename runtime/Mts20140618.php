<?php

namespace aliyun\sdk\services\Mts20140618;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20140618
 *
 * @package aliyun\sdk\services\Mts20140618
 * @method DeleteMcuTemplate DeleteMcuTemplate()
 * @method UpdateWaterMarkTemplate UpdateWaterMarkTemplate()
 * @method QueryFacerecogJobList QueryFacerecogJobList()
 * @method AddCategory AddCategory()
 * @method UpdateMediaPublishState UpdateMediaPublishState()
 * @method DescribeMtsUserResourcePackage DescribeMtsUserResourcePackage()
 * @method QueryMcuJob QueryMcuJob()
 * @method SubmitTerrorismJob SubmitTerrorismJob()
 * @method SubmitImageQualityJob SubmitImageQualityJob()
 * @method QueryVideoPoseJobList QueryVideoPoseJobList()
 * @method QueryMcuTemplate QueryMcuTemplate()
 * @method QueryMediaInfoJobList QueryMediaInfoJobList()
 * @method ListMediaWorkflowExecutions ListMediaWorkflowExecutions()
 * @method CancelJob CancelJob()
 * @method QueryVideoSummaryJobList QueryVideoSummaryJobList()
 * @method UpdateTerrorismPipeline UpdateTerrorismPipeline()
 * @method QueryPipelineList QueryPipelineList()
 * @method SubmitCoverJob SubmitCoverJob()
 * @method DeleteMediaWorkflow DeleteMediaWorkflow()
 * @method CheckResource CheckResource()
 * @method QueryCensorJobList QueryCensorJobList()
 * @method GetLicense GetLicense()
 * @method UpdateMediaCover UpdateMediaCover()
 * @method QueryCoverPipelineList QueryCoverPipelineList()
 * @method ReportFacerecogJobResult ReportFacerecogJobResult()
 * @method AddCensorPipeline AddCensorPipeline()
 * @method RegisterMediaDetailScenario RegisterMediaDetailScenario()
 * @method QueryAsrPipelineList QueryAsrPipelineList()
 * @method UpdateMcuTemplate UpdateMcuTemplate()
 * @method QueryAuthConfig QueryAuthConfig()
 * @method UpdateCensorPipeline UpdateCensorPipeline()
 * @method ListJob ListJob()
 * @method ReportTagJobResult ReportTagJobResult()
 * @method ListTerrorismPipeline ListTerrorismPipeline()
 * @method QueryEditingJobList QueryEditingJobList()
 * @method PlayerAuth PlayerAuth()
 * @method QueryVideoSplitJobList QueryVideoSplitJobList()
 * @method AddPornPipeline AddPornPipeline()
 * @method DeleteMCTemplate DeleteMCTemplate()
 * @method UpdateMediaCategory UpdateMediaCategory()
 * @method SubmitImageSearchJob SubmitImageSearchJob()
 * @method QueryMediaWorkflowList QueryMediaWorkflowList()
 * @method ReportFpShotJobResult ReportFpShotJobResult()
 * @method QueryMediaDetailJobList QueryMediaDetailJobList()
 * @method SubmitVideoPoseJob SubmitVideoPoseJob()
 * @method ReportTerrorismJobResult ReportTerrorismJobResult()
 * @method SubmitMediaDetailJob SubmitMediaDetailJob()
 * @method CreateSession CreateSession()
 * @method SubmitVideoSplitJob SubmitVideoSplitJob()
 * @method SubmitJobs SubmitJobs()
 * @method UnbindOutputBucket UnbindOutputBucket()
 * @method QueryTemplateList QueryTemplateList()
 * @method SubmitAnnotationJob SubmitAnnotationJob()
 * @method ListCensorPipeline ListCensorPipeline()
 * @method SubmitSubtitleJob SubmitSubtitleJob()
 * @method QueryMediaWorkflowExecutionList QueryMediaWorkflowExecutionList()
 * @method SearchMediaWorkflow SearchMediaWorkflow()
 * @method PlayInfo PlayInfo()
 * @method QueryCoverJobList QueryCoverJobList()
 * @method QueryMediaListByURL QueryMediaListByURL()
 * @method DeleteWaterMarkTemplate DeleteWaterMarkTemplate()
 * @method SubmitEditingJobs SubmitEditingJobs()
 * @method LogicalDeleteResource LogicalDeleteResource()
 * @method ActivateMediaWorkflow ActivateMediaWorkflow()
 * @method ListMedia ListMedia()
 * @method RefreshCdnDomainConfigsCache RefreshCdnDomainConfigsCache()
 * @method SubmitVideoGifJob SubmitVideoGifJob()
 * @method DeleteCategory DeleteCategory()
 * @method RegisterMediaDetailPerson RegisterMediaDetailPerson()
 * @method SubmitAnalysisJob SubmitAnalysisJob()
 * @method AddAsrPipeline AddAsrPipeline()
 * @method AddMCTemplate AddMCTemplate()
 * @method QuerySnapshotJobList QuerySnapshotJobList()
 * @method QueryMediaCensorJobDetail QueryMediaCensorJobDetail()
 * @method SearchWaterMarkTemplate SearchWaterMarkTemplate()
 * @method ListCoverPipeline ListCoverPipeline()
 * @method UpdateAsrPipeline UpdateAsrPipeline()
 * @method GetPackage GetPackage()
 * @method QueryVideoGifJobList QueryVideoGifJobList()
 * @method SubmitFpCompareJob SubmitFpCompareJob()
 * @method AddCoverPipeline AddCoverPipeline()
 * @method SetAuthConfig SetAuthConfig()
 * @method QueryMCJobList QueryMCJobList()
 * @method AddMediaTag AddMediaTag()
 * @method AddMediaWorkflow AddMediaWorkflow()
 * @method ReportAnnotationJobResult ReportAnnotationJobResult()
 * @method QueryMediaFpDeleteJobList QueryMediaFpDeleteJobList()
 * @method SubmitMCJob SubmitMCJob()
 * @method SubmitMediaCensorJob SubmitMediaCensorJob()
 * @method UpdatePornPipeline UpdatePornPipeline()
 * @method DeactivateMediaWorkflow DeactivateMediaWorkflow()
 * @method QueryFpImportResult QueryFpImportResult()
 * @method QueryFpShotJobList QueryFpShotJobList()
 * @method SearchPipeline SearchPipeline()
 * @method UpdateCoverPipeline UpdateCoverPipeline()
 * @method PhysicalDeleteResource PhysicalDeleteResource()
 * @method UpdateMedia UpdateMedia()
 * @method ReportPornJobResult ReportPornJobResult()
 * @method QueryFpCompareJobList QueryFpCompareJobList()
 * @method ListPornPipeline ListPornPipeline()
 * @method SubmitMcuJob SubmitMcuJob()
 * @method QueryPornJobList QueryPornJobList()
 * @method DeleteTemplate DeleteTemplate()
 * @method UpdateMediaWorkflow UpdateMediaWorkflow()
 * @method QueryTerrorismJobList QueryTerrorismJobList()
 * @method SubmitFpShotJob SubmitFpShotJob()
 * @method UpdatePipeline UpdatePipeline()
 * @method UnbindInputBucket UnbindInputBucket()
 * @method QueryMediaList QueryMediaList()
 * @method AddPipeline AddPipeline()
 * @method DecryptKey DecryptKey()
 * @method QueryTerrorismPipelineList QueryTerrorismPipelineList()
 * @method DeleteMcuJob DeleteMcuJob()
 * @method QueryCensorPipelineList QueryCensorPipelineList()
 * @method SubmitTagJob SubmitTagJob()
 * @method SearchTemplate SearchTemplate()
 * @method SearchMedia SearchMedia()
 * @method ListAllMediaBucket ListAllMediaBucket()
 * @method DeletePipeline DeletePipeline()
 * @method QueryAnnotationJobList QueryAnnotationJobList()
 * @method QueryWaterMarkTemplateList QueryWaterMarkTemplateList()
 * @method UpdateCategoryName UpdateCategoryName()
 * @method UpdateTemplate UpdateTemplate()
 * @method SubmitMediaInfoJob SubmitMediaInfoJob()
 * @method ReportCoverJobResult ReportCoverJobResult()
 * @method QuerySubtitleJobList QuerySubtitleJobList()
 * @method QueryAsrJobList QueryAsrJobList()
 * @method QueryMediaCensorJobList QueryMediaCensorJobList()
 * @method AddTemplate AddTemplate()
 * @method QueryPornPipelineList QueryPornPipelineList()
 * @method BindOutputBucket BindOutputBucket()
 * @method AddTerrorismPipeline AddTerrorismPipeline()
 * @method QueryComplexJobList QueryComplexJobList()
 * @method BindInputBucket BindInputBucket()
 * @method UpdateMCTemplate UpdateMCTemplate()
 * @method DeleteMedia DeleteMedia()
 * @method SubmitAsrJob SubmitAsrJob()
 * @method SubmitMediaFpDeleteJob SubmitMediaFpDeleteJob()
 * @method SubmitSnapshotJob SubmitSnapshotJob()
 * @method SubmitVideoSummaryJob SubmitVideoSummaryJob()
 * @method UpdateMediaWorkflowTriggerMode UpdateMediaWorkflowTriggerMode()
 * @method ListAllCategory ListAllCategory()
 * @method SubmitBeautifyJobs SubmitBeautifyJobs()
 * @method SubmitComplexJob SubmitComplexJob()
 * @method QueryMCTemplateList QueryMCTemplateList()
 * @method CategoryTree CategoryTree()
 * @method QueryTagJobList QueryTagJobList()
 * @method AddMedia AddMedia()
 * @method ReportCensorJobResult ReportCensorJobResult()
 * @method DeleteMediaTag DeleteMediaTag()
 * @method AddWaterMarkTemplate AddWaterMarkTemplate()
 * @method SubmitFacerecogJob SubmitFacerecogJob()
 * @method QueryImageSearchJobList QueryImageSearchJobList()
 * @method CreateMcuTemplate CreateMcuTemplate()
 * @method SubmitPornJob SubmitPornJob()
 * @method ReportVideoSplitJobResult ReportVideoSplitJobResult()
 * @method QueryJobList QueryJobList()
 * @method ListAsrPipeline ListAsrPipeline()
 * @method ReportMediaDetailJobResult ReportMediaDetailJobResult()
 * @method QueryAnalysisJobList QueryAnalysisJobList()
 */
class V20140618
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteMcuTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWaterMarkTemplateId($waterMarkTemplateId)
 * @method string getWaterMarkTemplateId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateWaterMarkTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFacerecogJobIds($facerecogJobIds)
 * @method string getFacerecogJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryFacerecogJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setParentId($parentId)
 * @method int getParentId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setPublish($publish)
 * @method bool getPublish()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateMediaPublishState extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeMtsUserResourcePackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 */
class QueryMcuJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setTerrorismConfig($terrorismConfig)
 * @method string getTerrorismConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitTerrorismJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitImageQualityJob extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryVideoPoseJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class QueryMcuTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaInfoJobIds($mediaInfoJobIds)
 * @method string getMediaInfoJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaInfoJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowName($mediaWorkflowName)
 * @method string getMediaWorkflowName()
 * @method $this setInputFileURL($inputFileURL)
 * @method string getInputFileURL()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListMediaWorkflowExecutions extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CancelJob extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryVideoSummaryJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateTerrorismPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineIds($pipelineIds)
 * @method string getPipelineIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryPipelineList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setCoverConfig($coverConfig)
 * @method string getCoverConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitCoverJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteMediaWorkflow extends Request
{

}/**
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
class CheckResource extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryCensorJobList extends Request
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
 * @method $this setLicenseUrl($licenseUrl)
 * @method string getLicenseUrl()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setHeader($header)
 * @method string getHeader()
 * @method $this setType($type)
 * @method string getType()
 */
class GetLicense extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateMediaCover extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineIds($pipelineIds)
 * @method string getPipelineIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryCoverPipelineList extends Request
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
 * @method $this setFacerecog($facerecog)
 * @method string getFacerecog()
 * @method $this setDetails($details)
 * @method string getDetails()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportFacerecogJobResult extends Request
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
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddCensorPipeline extends Request
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
 * @method $this setScenario($scenario)
 * @method string getScenario()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RegisterMediaDetailScenario extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineIds($pipelineIds)
 * @method string getPipelineIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryAsrPipelineList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class UpdateMcuTemplate extends Request
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
class QueryAuthConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateCensorPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListJob extends Request
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
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setResult($result)
 * @method string getResult()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportTagJobResult extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListTerrorismPipeline extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryEditingJobList extends Request
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
class PlayerAuth extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryVideoSplitJobList extends Request
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
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddPornPipeline extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteMCTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setInputVideo($inputVideo)
 * @method string getInputVideo()
 * @method $this setInputImage($inputImage)
 * @method string getInputImage()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setFpDBId($fpDBId)
 * @method string getFpDBId()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitImageSearchJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowIds($mediaWorkflowIds)
 * @method string getMediaWorkflowIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaWorkflowList extends Request
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
 * @method $this setResult($result)
 * @method string getResult()
 * @method $this setDetails($details)
 * @method string getDetails()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportFpShotJobResult extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaDetailJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setOutputConfig($outputConfig)
 * @method string getOutputConfig()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitVideoPoseJob extends Request
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
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportTerrorismJobResult extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setMediaDetailConfig($mediaDetailConfig)
 * @method string getMediaDetailConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitMediaDetailJob extends Request
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
 * @method $this setEndUserId($endUserId)
 * @method string getEndUserId()
 * @method $this setSessionTime($sessionTime)
 * @method int getSessionTime()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 */
class CreateSession extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setVideoSplitConfig($videoSplitConfig)
 * @method string getVideoSplitConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitVideoSplitJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setOutputs($outputs)
 * @method string getOutputs()
 * @method $this setOutputBucket($outputBucket)
 * @method string getOutputBucket()
 * @method $this setOutputLocation($outputLocation)
 * @method string getOutputLocation()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitJobs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UnbindOutputBucket extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryTemplateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setAnnotationConfig($annotationConfig)
 * @method string getAnnotationConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitAnnotationJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListCensorPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInputConfig($inputConfig)
 * @method string getInputConfig()
 * @method $this setOutputConfig($outputConfig)
 * @method string getOutputConfig()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitSubtitleJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRunIds($runIds)
 * @method string getRunIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaWorkflowExecutionList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStateList($stateList)
 * @method string getStateList()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SearchMediaWorkflow extends Request
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
 * @method $this setFormats($formats)
 * @method string getFormats()
 * @method $this setAuthInfo($authInfo)
 * @method string getAuthInfo()
 * @method $this setAuthTimeout($authTimeout)
 * @method int getAuthTimeout()
 * @method $this setRand($rand)
 * @method string getRand()
 * @method $this setPlayDomain($playDomain)
 * @method string getPlayDomain()
 * @method $this setHlsUriToken($hlsUriToken)
 * @method string getHlsUriToken()
 * @method $this setTerminal($terminal)
 * @method string getTerminal()
 */
class PlayInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCoverJobIds($coverJobIds)
 * @method string getCoverJobIds()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryCoverJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFileURLs($fileURLs)
 * @method string getFileURLs()
 * @method $this setIncludePlayList($includePlayList)
 * @method bool getIncludePlayList()
 * @method $this setIncludeSnapshotList($includeSnapshotList)
 * @method bool getIncludeSnapshotList()
 * @method $this setIncludeMediaInfo($includeMediaInfo)
 * @method bool getIncludeMediaInfo()
 * @method $this setIncludeSummaryList($includeSummaryList)
 * @method bool getIncludeSummaryList()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaListByURL extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWaterMarkTemplateId($waterMarkTemplateId)
 * @method string getWaterMarkTemplateId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteWaterMarkTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setEditingInputs($editingInputs)
 * @method string getEditingInputs()
 * @method $this setEditingJobOutputs($editingJobOutputs)
 * @method string getEditingJobOutputs()
 * @method $this setOutputBucket($outputBucket)
 * @method string getOutputBucket()
 * @method $this setOutputLocation($outputLocation)
 * @method string getOutputLocation()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitEditingJobs extends Request
{

}/**
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
class LogicalDeleteResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ActivateMediaWorkflow extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setTo($to)
 * @method string getTo()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListMedia extends Request
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
 * @method $this setDomains($domains)
 * @method string getDomains()
 */
class RefreshCdnDomainConfigsCache extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setVideoGifConfig($videoGifConfig)
 * @method string getVideoGifConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitVideoGifJob extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setPersonName($personName)
 * @method string getPersonName()
 * @method $this setImages($images)
 * @method string getImages()
 * @method $this setPersonLib($personLib)
 * @method string getPersonLib()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RegisterMediaDetailPerson extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setAnalysisConfig($analysisConfig)
 * @method string getAnalysisConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setPriority($priority)
 * @method string getPriority()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitAnalysisJob extends Request
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
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddAsrPipeline extends Request
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
 * @method $this setPorn($porn)
 * @method string getPorn()
 * @method $this setTerrorism($terrorism)
 * @method string getTerrorism()
 * @method $this setPolitics($politics)
 * @method string getPolitics()
 * @method $this setAd($ad)
 * @method string getAd()
 * @method $this setQrcode($qrcode)
 * @method string getQrcode()
 * @method $this setLive($live)
 * @method string getLive()
 * @method $this setLogo($logo)
 * @method string getLogo()
 * @method $this setAbuse($abuse)
 * @method string getAbuse()
 * @method $this setContraband($contraband)
 * @method string getContraband()
 * @method $this setspam($spam)
 * @method string getspam()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddMCTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setSnapshotJobIds($snapshotJobIds)
 * @method string getSnapshotJobIds()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QuerySnapshotJobList extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 */
class QueryMediaCensorJobDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SearchWaterMarkTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListCoverPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateAsrPipeline extends Request
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
 * @method $this setData($data)
 * @method string getData()
 */
class GetPackage extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryVideoGifJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMasterMedia($masterMedia)
 * @method string getMasterMedia()
 * @method $this setQueryMedia($queryMedia)
 * @method string getQueryMedia()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setFpDBId($fpDBId)
 * @method string getFpDBId()
 * @method $this setMatchedFrameStorage($matchedFrameStorage)
 * @method string getMatchedFrameStorage()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitFpCompareJob extends Request
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
 * @method $this setPriority($priority)
 * @method string getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddCoverPipeline extends Request
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
 * @method $this setKey1($key1)
 * @method string getKey1()
 * @method $this setKey2($key2)
 * @method string getKey2()
 */
class SetAuthConfig extends Request
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
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMCJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddMediaTag extends Request
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
 * @method $this setTopology($topology)
 * @method string getTopology()
 * @method $this setTriggerMode($triggerMode)
 * @method string getTriggerMode()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddMediaWorkflow extends Request
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
 * @method $this setAnnotation($annotation)
 * @method string getAnnotation()
 * @method $this setDetails($details)
 * @method string getDetails()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportAnnotationJobResult extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaFpDeleteJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setImages($images)
 * @method string getImages()
 * @method $this setTexts($texts)
 * @method string getTexts()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setCensorConfig($censorConfig)
 * @method string getCensorConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitMCJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setCoverImages($coverImages)
 * @method string getCoverImages()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBarrages($barrages)
 * @method string getBarrages()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setVideoCensorConfig($videoCensorConfig)
 * @method string getVideoCensorConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitMediaCensorJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdatePornPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeactivateMediaWorkflow extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryFpImportResult extends Request
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
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPrimaryKeyList($primaryKeyList)
 * @method string getPrimaryKeyList()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryFpShotJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SearchPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateCoverPipeline extends Request
{

}/**
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
class PhysicalDeleteResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateMedia extends Request
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
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportPornJobResult extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryFpCompareJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListPornPipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SubmitMcuJob extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryPornJobList extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setTopology($topology)
 * @method string getTopology()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateMediaWorkflow extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryTerrorismJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setFpShotConfig($fpShotConfig)
 * @method string getFpShotConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitFpShotJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdatePipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UnbindInputBucket extends Request
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
 * @method $this setIncludePlayList($includePlayList)
 * @method bool getIncludePlayList()
 * @method $this setIncludeSnapshotList($includeSnapshotList)
 * @method bool getIncludeSnapshotList()
 * @method $this setIncludeMediaInfo($includeMediaInfo)
 * @method bool getIncludeMediaInfo()
 * @method $this setIncludeSummaryList($includeSummaryList)
 * @method bool getIncludeSummaryList()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaList extends Request
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
 * @method $this setSpeed($speed)
 * @method string getSpeed()
 * @method $this setSpeedLevel($speedLevel)
 * @method int getSpeedLevel()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddPipeline extends Request
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
 * @method $this setCiphertextBlob($ciphertextBlob)
 * @method string getCiphertextBlob()
 * @method $this setRand($rand)
 * @method string getRand()
 */
class DecryptKey extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineIds($pipelineIds)
 * @method string getPipelineIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryTerrorismPipelineList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setJobIds($jobIds)
 * @method string getJobIds()
 */
class DeleteMcuJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineIds($pipelineIds)
 * @method string getPipelineIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryCensorPipelineList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setTagConfig($tagConfig)
 * @method string getTagConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitTagJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SearchTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setTo($to)
 * @method string getTo()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SearchMedia extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 */
class ListAllMediaBucket extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeletePipeline extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAnnotationJobIds($annotationJobIds)
 * @method string getAnnotationJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryAnnotationJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setWaterMarkTemplateIds($waterMarkTemplateIds)
 * @method string getWaterMarkTemplateIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryWaterMarkTemplateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCateId($cateId)
 * @method string getCateId()
 * @method $this setCateName($cateName)
 * @method string getCateName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateCategoryName extends Request
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
 * @method $this setName($name)
 * @method string getName()
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setAudio($audio)
 * @method string getAudio()
 * @method $this setMuxConfig($muxConfig)
 * @method string getMuxConfig()
 * @method $this setTransConfig($transConfig)
 * @method string getTransConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setAsync($async)
 * @method bool getAsync()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitMediaInfoJob extends Request
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
 * @method $this setResult($result)
 * @method string getResult()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportCoverJobResult extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QuerySubtitleJobList extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryAsrJobList extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($maximumPageSize)
 * @method int getMaximumPageSize()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 */
class QueryMediaCensorJobList extends Request
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
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setVideo($video)
 * @method string getVideo()
 * @method $this setAudio($audio)
 * @method string getAudio()
 * @method $this setTransConfig($transConfig)
 * @method string getTransConfig()
 * @method $this setMuxConfig($muxConfig)
 * @method string getMuxConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineIds($pipelineIds)
 * @method string getPipelineIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryPornPipelineList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class BindOutputBucket extends Request
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
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setNotifyConfig($notifyConfig)
 * @method string getNotifyConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddTerrorismPipeline extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryComplexJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class BindInputBucket extends Request
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
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPorn($porn)
 * @method string getPorn()
 * @method $this setTerrorism($terrorism)
 * @method string getTerrorism()
 * @method $this setPolitics($politics)
 * @method string getPolitics()
 * @method $this setAd($ad)
 * @method string getAd()
 * @method $this setQrcode($qrcode)
 * @method string getQrcode()
 * @method $this setLive($live)
 * @method string getLive()
 * @method $this setLogo($logo)
 * @method string getLogo()
 * @method $this setAbuse($abuse)
 * @method string getAbuse()
 * @method $this setContraband($contraband)
 * @method string getContraband()
 * @method $this setspam($spam)
 * @method string getspam()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateMCTemplate extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteMedia extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setAsrConfig($asrConfig)
 * @method string getAsrConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitAsrJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setPrimaryKey($primaryKey)
 * @method string getPrimaryKey()
 * @method $this setFpDBId($fpDBId)
 * @method string getFpDBId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitMediaFpDeleteJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setSnapshotConfig($snapshotConfig)
 * @method string getSnapshotConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
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
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setVideoSummaryConfig($videoSummaryConfig)
 * @method string getVideoSummaryConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitVideoSummaryJob extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setTriggerMode($triggerMode)
 * @method string getTriggerMode()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UpdateMediaWorkflowTriggerMode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
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
 * @method $this setBeautifyConfig($beautifyConfig)
 * @method string getBeautifyConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setAsync($async)
 * @method bool getAsync()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitBeautifyJobs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInputs($inputs)
 * @method string getInputs()
 * @method $this setComplexConfigs($complexConfigs)
 * @method string getComplexConfigs()
 * @method $this setTranscodeOutput($transcodeOutput)
 * @method string getTranscodeOutput()
 * @method $this setOutputBucket($outputBucket)
 * @method string getOutputBucket()
 * @method $this setOutputLocation($outputLocation)
 * @method string getOutputLocation()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitComplexJob extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMCTemplateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CategoryTree extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTagJobIds($tagJobIds)
 * @method string getTagJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryTagJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFileURL($fileURL)
 * @method string getFileURL()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setMediaWorkflowId($mediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowUserData($mediaWorkflowUserData)
 * @method string getMediaWorkflowUserData()
 * @method $this setInputUnbind($inputUnbind)
 * @method bool getInputUnbind()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setOverrideParams($overrideParams)
 * @method string getOverrideParams()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddMedia extends Request
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
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setDetail($detail)
 * @method string getDetail()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportCensorJobResult extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteMediaTag extends Request
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
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddWaterMarkTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setFacerecogConfig($facerecogConfig)
 * @method string getFacerecogConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitFacerecogJob extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryImageSearchJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class CreateMcuTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setPipelineId($pipelineId)
 * @method string getPipelineId()
 * @method $this setPornConfig($pornConfig)
 * @method string getPornConfig()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class SubmitPornJob extends Request
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
 * @method $this setResult($result)
 * @method string getResult()
 * @method $this setDetails($details)
 * @method string getDetails()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportVideoSplitJobResult extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryJobList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListAsrPipeline extends Request
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
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setResults($results)
 * @method string getResults()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReportMediaDetailJobResult extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAnalysisJobIds($analysisJobIds)
 * @method string getAnalysisJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryAnalysisJobList extends Request
{

}