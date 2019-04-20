<?php

namespace aliyun\sdk\services\Mts20180528;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180528
 *
 * @package aliyun\sdk\services\Mts20180528
 * @method UpdateWaterMarkTemplate UpdateWaterMarkTemplate()
 * @method AddCategory AddCategory()
 * @method UpdateMediaPublishState UpdateMediaPublishState()
 * @method QueryMediaInfoJobList QueryMediaInfoJobList()
 * @method ListMediaWorkflowExecutions ListMediaWorkflowExecutions()
 * @method CancelJob CancelJob()
 * @method QueryPipelineList QueryPipelineList()
 * @method DeleteMediaWorkflow DeleteMediaWorkflow()
 * @method CheckResource CheckResource()
 * @method QueryMediaWorkflowListByName QueryMediaWorkflowListByName()
 * @method UpdateMediaCover UpdateMediaCover()
 * @method ListJob ListJob()
 * @method StartMediaWorkflowExecution StartMediaWorkflowExecution()
 * @method QueryEditingJobList QueryEditingJobList()
 * @method PlayerAuth PlayerAuth()
 * @method UpdateMediaCategory UpdateMediaCategory()
 * @method QueryMediaWorkflowList QueryMediaWorkflowList()
 * @method SubmitMetaInfoJob SubmitMetaInfoJob()
 * @method SubmitJobs SubmitJobs()
 * @method UnbindOutputBucket UnbindOutputBucket()
 * @method QueryTemplateList QueryTemplateList()
 * @method SubmitSubtitleJob SubmitSubtitleJob()
 * @method QueryMediaWorkflowExecutionList QueryMediaWorkflowExecutionList()
 * @method SearchMediaWorkflow SearchMediaWorkflow()
 * @method QueryMediaListByURL QueryMediaListByURL()
 * @method DeleteWaterMarkTemplate DeleteWaterMarkTemplate()
 * @method SubmitEditingJobs SubmitEditingJobs()
 * @method LogicalDeleteResource LogicalDeleteResource()
 * @method ActivateMediaWorkflow ActivateMediaWorkflow()
 * @method ListMedia ListMedia()
 * @method DeleteCategory DeleteCategory()
 * @method QueryMetaInfoJobList QueryMetaInfoJobList()
 * @method SubmitAnalysisJob SubmitAnalysisJob()
 * @method QuerySnapshotJobList QuerySnapshotJobList()
 * @method SearchWaterMarkTemplate SearchWaterMarkTemplate()
 * @method AddMediaTag AddMediaTag()
 * @method AddMediaWorkflow AddMediaWorkflow()
 * @method DeactivateMediaWorkflow DeactivateMediaWorkflow()
 * @method SearchPipeline SearchPipeline()
 * @method PhysicalDeleteResource PhysicalDeleteResource()
 * @method UpdateMedia UpdateMedia()
 * @method DeleteTemplate DeleteTemplate()
 * @method UpdateMediaWorkflow UpdateMediaWorkflow()
 * @method QueryServiceUsage QueryServiceUsage()
 * @method UpdatePipeline UpdatePipeline()
 * @method UnbindInputBucket UnbindInputBucket()
 * @method QueryMediaList QueryMediaList()
 * @method AddPipeline AddPipeline()
 * @method ListSystemTemplate ListSystemTemplate()
 * @method SearchTemplate SearchTemplate()
 * @method SearchMedia SearchMedia()
 * @method ListAllMediaBucket ListAllMediaBucket()
 * @method DeletePipeline DeletePipeline()
 * @method QuerySystemTemplateList QuerySystemTemplateList()
 * @method QueryWaterMarkTemplateList QueryWaterMarkTemplateList()
 * @method UpdateCategoryName UpdateCategoryName()
 * @method UpdateTemplate UpdateTemplate()
 * @method SubmitMediaInfoJob SubmitMediaInfoJob()
 * @method QuerySubtitleJobList QuerySubtitleJobList()
 * @method AddTemplate AddTemplate()
 * @method BindOutputBucket BindOutputBucket()
 * @method BindInputBucket BindInputBucket()
 * @method DeleteMedia DeleteMedia()
 * @method SubmitSnapshotJob SubmitSnapshotJob()
 * @method UpdateMediaWorkflowTriggerMode UpdateMediaWorkflowTriggerMode()
 * @method ListAllCategory ListAllCategory()
 * @method CategoryTree CategoryTree()
 * @method AddMedia AddMedia()
 * @method DeleteMediaTag DeleteMediaTag()
 * @method AddWaterMarkTemplate AddWaterMarkTemplate()
 * @method QueryJobList QueryJobList()
 * @method QueryAnalysisJobList QueryAnalysisJobList()
 */
class V20180528
{
}

/**
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
 * @method $this setNames($names)
 * @method string getNames()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMediaWorkflowListByName extends Request
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
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class StartMediaWorkflowExecution extends Request
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
class SubmitMetaInfoJob extends Request
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
 * @method $this setMetaInfoJobIds($metaInfoJobIds)
 * @method string getMetaInfoJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryMetaInfoJobList extends Request
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
 * @method $this setSnapshotJobIds($snapshotJobIds)
 * @method string getSnapshotJobIds()
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
 * @method $this setType($type)
 * @method string getType()
 * @method $this setCodec($codec)
 * @method string getCodec()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setQueryRegion($queryRegion)
 * @method string getQueryRegion()
 * @method $this setStartOfDayRange($startOfDayRange)
 * @method string getStartOfDayRange()
 * @method $this setEndOfDayRange($endOfDayRange)
 * @method string getEndOfDayRange()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryServiceUsage extends Request
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
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ListSystemTemplate extends Request
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
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QuerySystemTemplateList extends Request
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
 * @method $this setAnalysisJobIds($analysisJobIds)
 * @method string getAnalysisJobIds()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class QueryAnalysisJobList extends Request
{

}