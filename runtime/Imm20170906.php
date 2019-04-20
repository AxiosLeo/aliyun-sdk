<?php

namespace aliyun\sdk\services\Imm20170906;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170906
 *
 * @package aliyun\sdk\services\Imm20170906
 * @method GetTagJob GetTagJob()
 * @method IndexVideo IndexVideo()
 * @method ListTagSets ListTagSets()
 * @method GetConvertOfficeFormatTask GetConvertOfficeFormatTask()
 * @method GetFaceSet GetFaceSet()
 * @method RemoveTagByUrl RemoveTagByUrl()
 * @method CreateVideoTagJob CreateVideoTagJob()
 * @method CreateFrameTagSet CreateFrameTagSet()
 * @method ListVideoFrames ListVideoFrames()
 * @method DeletePhotoProcessTask DeletePhotoProcessTask()
 * @method GetFaceDetail GetFaceDetail()
 * @method ListFrameGrabJobs ListFrameGrabJobs()
 * @method DeleteDocIndex DeleteDocIndex()
 * @method ListTagPhotos ListTagPhotos()
 * @method GetSet GetSet()
 * @method CreatePornBatchDetectJob CreatePornBatchDetectJob()
 * @method FindImagesByTagNames FindImagesByTagNames()
 * @method GetFaceSearchUser GetFaceSearchUser()
 * @method DelProject DelProject()
 * @method ListFaceSearchGroupImages ListFaceSearchGroupImages()
 * @method DeleteImageJob DeleteImageJob()
 * @method CreateFrameTagAnalyseTask CreateFrameTagAnalyseTask()
 * @method CreateCADConversionTask CreateCADConversionTask()
 * @method FaceCompare FaceCompare()
 * @method DeleteTagByUrl DeleteTagByUrl()
 * @method CreateOfficeConversionTask CreateOfficeConversionTask()
 * @method ListFaceGroupPhotos ListFaceGroupPhotos()
 * @method ListFaceJobs ListFaceJobs()
 * @method ListOfficeConversionTask ListOfficeConversionTask()
 * @method GetFormatConvertJob GetFormatConvertJob()
 * @method GetProject GetProject()
 * @method CreateTagJob CreateTagJob()
 * @method DeleteVideoTask DeleteVideoTask()
 * @method DeleteVideoAnalyseJob DeleteVideoAnalyseJob()
 * @method CreateBatchIndexFrameTagTask CreateBatchIndexFrameTagTask()
 * @method CreateGroupFacesJob CreateGroupFacesJob()
 * @method SearchFace SearchFace()
 * @method CreateVideoAnalyseJob CreateVideoAnalyseJob()
 * @method GetVideoTask GetVideoTask()
 * @method IndexTag IndexTag()
 * @method GetTagSet GetTagSet()
 * @method IndexFrameTag IndexFrameTag()
 * @method CreateFormatConvertJob CreateFormatConvertJob()
 * @method Detect Detect()
 * @method GetPhotoJob GetPhotoJob()
 * @method GetVideoTagJob GetVideoTagJob()
 * @method ListProjects ListProjects()
 * @method DetectQRCodes DetectQRCodes()
 * @method ListFaceSearchGroups ListFaceSearchGroups()
 * @method GetPhotoProcessTask GetPhotoProcessTask()
 * @method GetFaceJob GetFaceJob()
 * @method ListSets ListSets()
 * @method GetVideoAIJob GetVideoAIJob()
 * @method ListPornBatchDetectJobs ListPornBatchDetectJobs()
 * @method IndexImage IndexImage()
 * @method FindSimilarFaces FindSimilarFaces()
 * @method GetFaceGroupPhotos GetFaceGroupPhotos()
 * @method UpdateFaceGroupById UpdateFaceGroupById()
 * @method ListVideoAudios ListVideoAudios()
 * @method DetectLogo DetectLogo()
 * @method DeleteFaceSearchUser DeleteFaceSearchUser()
 * @method CreateTagSet CreateTagSet()
 * @method ConvertOfficeFormat ConvertOfficeFormat()
 * @method CreateDeleteFaceSetJob CreateDeleteFaceSetJob()
 * @method ListVideoTasks ListVideoTasks()
 * @method GetFaceSearchGroup GetFaceSearchGroup()
 * @method GroupFaces GroupFaces()
 * @method SearchDocIndex SearchDocIndex()
 * @method DeleteFaceSearchImageById DeleteFaceSearchImageById()
 * @method CreateVideoAnalyseTask CreateVideoAnalyseTask()
 * @method DeleteFormatConvertJob DeleteFormatConvertJob()
 * @method ListPhotoJobs ListPhotoJobs()
 * @method DeleteTagSet DeleteTagSet()
 * @method ListImageFaces ListImageFaces()
 * @method DeleteFaceById DeleteFaceById()
 * @method DeleteTagByName DeleteTagByName()
 * @method RegistFace RegistFace()
 * @method DescribeRegions DescribeRegions()
 * @method CreateVideoAIJob CreateVideoAIJob()
 * @method ListFaceSets ListFaceSets()
 * @method DeleteFaceSearchGroup DeleteFaceSearchGroup()
 * @method UpdateImage UpdateImage()
 * @method DeleteProject DeleteProject()
 * @method ListVideoTagJobs ListVideoTagJobs()
 * @method DeletePhotoJob DeletePhotoJob()
 * @method ListTagNames ListTagNames()
 * @method DetectImageLogos DetectImageLogos()
 * @method ListConvertOfficeFormatTasks ListConvertOfficeFormatTasks()
 * @method DeleteVideo DeleteVideo()
 * @method FaceRegist FaceRegist()
 * @method DetectFace DetectFace()
 * @method DetectImageFaces DetectImageFaces()
 * @method DeleteConvertOfficeFormatTask DeleteConvertOfficeFormatTask()
 * @method RemoveTagByName RemoveTagByName()
 * @method CreatePhotoJob CreatePhotoJob()
 * @method CreateIndexFaceJob CreateIndexFaceJob()
 * @method GetBatchIndexFrameTagTask GetBatchIndexFrameTagTask()
 * @method GetFaceSearchImage GetFaceSearchImage()
 * @method UpdateDocIndexMeta UpdateDocIndexMeta()
 * @method UpdateFaceGroup UpdateFaceGroup()
 * @method DetectImageCelebrity DetectImageCelebrity()
 * @method DetectTag DetectTag()
 * @method UpdateProject UpdateProject()
 * @method GetVideoAnalyseJob GetVideoAnalyseJob()
 * @method ListPhotoProcessTasks ListPhotoProcessTasks()
 * @method ListSetTags ListSetTags()
 * @method ListTagJobs ListTagJobs()
 * @method DeleteFaceSet DeleteFaceSet()
 * @method ListFormatConvertJobs ListFormatConvertJobs()
 * @method CreateFaceSet CreateFaceSet()
 * @method GetImage GetImage()
 * @method ListImages ListImages()
 * @method FaceSearch FaceSearch()
 * @method DetectClothes DetectClothes()
 * @method DeleteFaceByUrl DeleteFaceByUrl()
 * @method GetDocIndex GetDocIndex()
 * @method CreateDocIndexTask CreateDocIndexTask()
 * @method FindImages FindImages()
 * @method GetTagPhotos GetTagPhotos()
 * @method DeleteImage DeleteImage()
 * @method ListVideoAnalyseJobs ListVideoAnalyseJobs()
 * @method DeleteTagJob DeleteTagJob()
 * @method CreateFrameGrabJob CreateFrameGrabJob()
 * @method DeleteFrameGrabJob DeleteFrameGrabJob()
 * @method ListTagName ListTagName()
 * @method CompareFace CompareFace()
 * @method DetectImageTags DetectImageTags()
 * @method ListFaceSearchGroupUsers ListFaceSearchGroupUsers()
 * @method PhotoProcess PhotoProcess()
 * @method ListImageJobs ListImageJobs()
 * @method DeleteOfficeConversionTask DeleteOfficeConversionTask()
 * @method RemoveFaceByUrl RemoveFaceByUrl()
 * @method CreateSet CreateSet()
 * @method GetVideo GetVideo()
 * @method ListVideos ListVideos()
 * @method PutProject PutProject()
 * @method GetFaceSetDetail GetFaceSetDetail()
 * @method DeleteFaceJob DeleteFaceJob()
 * @method ListFaceGroups ListFaceGroups()
 * @method DeletePornBatchDetectJob DeletePornBatchDetectJob()
 * @method CreateFaceJob CreateFaceJob()
 * @method GetDocIndexTask GetDocIndexTask()
 * @method CompareImageFaces CompareImageFaces()
 * @method GetOfficeConversionTask GetOfficeConversionTask()
 * @method UpdateSet UpdateSet()
 * @method GetFrameGrabJob GetFrameGrabJob()
 * @method GetImageJob GetImageJob()
 * @method DeleteSet DeleteSet()
 * @method GetPornBatchDetectJob GetPornBatchDetectJob()
 * @method IndexFace IndexFace()
 * @method GetFrameTagAnalyseTask GetFrameTagAnalyseTask()
 * @method DetectImageTexts DetectImageTexts()
 */
class V20170906
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetTagJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setVideoUri($videoUri)
 * @method string getVideoUri()
 * @method $this setRemarksA($remarksA)
 * @method string getRemarksA()
 * @method $this setRemarksB($remarksB)
 * @method string getRemarksB()
 * @method $this setGrabType($grabType)
 * @method string getGrabType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setRemarksC($remarksC)
 * @method string getRemarksC()
 * @method $this setRemarksD($remarksD)
 * @method string getRemarksD()
 * @method $this setExternalId($externalId)
 * @method string getExternalId()
 */
class IndexVideo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListTagSets extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetConvertOfficeFormatTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 */
class GetFaceSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 */
class RemoveTagByUrl extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setStartTime($startTime)
 * @method Float getStartTime()
 * @method $this setInterval($interval)
 * @method Float getInterval()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setTgtWidth($tgtWidth)
 * @method int getTgtWidth()
 * @method $this setTgtHeight($tgtHeight)
 * @method int getTgtHeight()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 * @method $this setKeepFrame($keepFrame)
 * @method bool getKeepFrame()
 * @method $this setCutBlack($cutBlack)
 * @method bool getCutBlack()
 * @method $this setPJobId($pJobId)
 * @method string getPJobId()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 * @method $this setTagNum($tagNum)
 * @method int getTagNum()
 * @method $this setTagStyle($tagStyle)
 * @method string getTagStyle()
 */
class CreateVideoTagJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 */
class CreateFrameTagSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setVideoUri($videoUri)
 * @method string getVideoUri()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListVideoFrames extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeletePhotoProcessTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setFaceId($faceId)
 * @method string getFaceId()
 */
class GetFaceDetail extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 * @method $this setPJobId($pJobId)
 * @method string getPJobId()
 */
class ListFrameGrabJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setUniqueId($uniqueId)
 * @method string getUniqueId()
 * @method $this setSet($set)
 * @method string getSet()
 */
class DeleteDocIndex extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method string getMaxKeys()
 */
class ListTagPhotos extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 */
class GetSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 */
class CreatePornBatchDetectJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setTagNames($tagNames)
 * @method string getTagNames()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class FindImagesByTagNames extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setUser($user)
 * @method string getUser()
 */
class GetFaceSearchUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 */
class DelProject extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 * @method $this setUser($user)
 * @method string getUser()
 */
class ListFaceSearchGroupImages extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobType($jobType)
 * @method string getJobType()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeleteImageJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setTagNum($tagNum)
 * @method int getTagNum()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 * @method $this setPJobId($pJobId)
 * @method string getPJobId()
 */
class CreateFrameTagAnalyseTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtType($tgtType)
 * @method string getTgtType()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setSrcType($srcType)
 * @method string getSrcType()
 * @method $this setZoomFactor($zoomFactor)
 * @method int getZoomFactor()
 * @method $this setZoomLevel($zoomLevel)
 * @method int getZoomLevel()
 * @method $this setUnitHeight($unitHeight)
 * @method int getUnitHeight()
 * @method $this setUnitWidth($unitWidth)
 * @method int getUnitWidth()
 * @method $this setBaseRow($baseRow)
 * @method int getBaseRow()
 * @method $this setBaseCol($baseCol)
 * @method int getBaseCol()
 * @method $this setThumbnails($thumbnails)
 * @method bool getThumbnails()
 * @method $this setModelId($modelId)
 * @method string getModelId()
 */
class CreateCADConversionTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUriA($srcUriA)
 * @method string getSrcUriA()
 * @method $this setSrcUriB($srcUriB)
 * @method string getSrcUriB()
 */
class FaceCompare extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 */
class DeleteTagByUrl extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtType($tgtType)
 * @method string getTgtType()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setSrcType($srcType)
 * @method string getSrcType()
 * @method $this setStartPage($startPage)
 * @method int getStartPage()
 * @method $this setEndPage($endPage)
 * @method int getEndPage()
 * @method $this setMaxSheetRow($maxSheetRow)
 * @method int getMaxSheetRow()
 * @method $this setMaxSheetCol($maxSheetCol)
 * @method int getMaxSheetCol()
 * @method $this setMaxSheetCount($maxSheetCount)
 * @method int getMaxSheetCount()
 * @method $this setSheetOnePage($sheetOnePage)
 * @method bool getSheetOnePage()
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setTgtFilePrefix($tgtFilePrefix)
 * @method string getTgtFilePrefix()
 * @method $this setTgtFileSuffix($tgtFileSuffix)
 * @method string getTgtFileSuffix()
 * @method $this setTgtFilePages($tgtFilePages)
 * @method string getTgtFilePages()
 * @method $this setFitToPagesTall($fitToPagesTall)
 * @method bool getFitToPagesTall()
 * @method $this setFitToPagesWide($fitToPagesWide)
 * @method bool getFitToPagesWide()
 * @method $this setIdempotentToken($idempotentToken)
 * @method string getIdempotentToken()
 * @method $this setPdfVector($pdfVector)
 * @method bool getPdfVector()
 * @method $this setHidecomments($hidecomments)
 * @method bool getHidecomments()
 * @method $this setDisplayDpi($displayDpi)
 * @method int getDisplayDpi()
 */
class CreateOfficeConversionTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListFaceGroupPhotos extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setCondition($condition)
 * @method string getCondition()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListFaceJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListOfficeConversionTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetFormatConvertJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 */
class GetProject extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 */
class CreateTagJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeleteVideoTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeleteVideoAnalyseJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setPJobId($pJobId)
 * @method string getPJobId()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 */
class CreateBatchIndexFrameTagTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 */
class CreateGroupFacesJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setResultNum($resultNum)
 * @method int getResultNum()
 * @method $this setIsThreshold($isThreshold)
 * @method bool getIsThreshold()
 * @method $this setSearchThresholdLevel($searchThresholdLevel)
 * @method string getSearchThresholdLevel()
 */
class SearchFace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setStartTime($startTime)
 * @method Float getStartTime()
 * @method $this setInterval($interval)
 * @method Float getInterval()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setTgtWidth($tgtWidth)
 * @method int getTgtWidth()
 * @method $this setTgtHeight($tgtHeight)
 * @method int getTgtHeight()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 * @method $this setKeepFrame($keepFrame)
 * @method bool getKeepFrame()
 * @method $this setCutBlack($cutBlack)
 * @method bool getCutBlack()
 * @method $this setPJobId($pJobId)
 * @method string getPJobId()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 */
class CreateVideoAnalyseJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetVideoTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 * @method $this setForce($force)
 * @method string getForce()
 */
class IndexTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 */
class GetTagSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 */
class IndexFrameTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 */
class CreateFormatConvertJob extends Request
{

}/**
 * @method $this setUrl($url)
 * @method string getUrl()
 */
class Detect extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetPhotoJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetVideoTagJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListProjects extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 */
class DetectQRCodes extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListFaceSearchGroups extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetPhotoProcessTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetFaceJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListSets extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobs($jobs)
 * @method string getJobs()
 */
class GetVideoAIJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListPornBatchDetectJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 * @method $this setRemarksA($remarksA)
 * @method string getRemarksA()
 * @method $this setRemarksB($remarksB)
 * @method string getRemarksB()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceUri($sourceUri)
 * @method string getSourceUri()
 * @method $this setSourcePosition($sourcePosition)
 * @method string getSourcePosition()
 * @method $this setRemarksC($remarksC)
 * @method string getRemarksC()
 * @method $this setRemarksD($remarksD)
 * @method string getRemarksD()
 * @method $this setExternalId($externalId)
 * @method string getExternalId()
 */
class IndexImage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 * @method $this setFaceId($faceId)
 * @method string getFaceId()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setMinSimilarity($minSimilarity)
 * @method Float getMinSimilarity()
 */
class FindSimilarFaces extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class GetFaceGroupPhotos extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setFaceIds($faceIds)
 * @method string getFaceIds()
 * @method $this setNewGroupId($newGroupId)
 * @method string getNewGroupId()
 */
class UpdateFaceGroupById extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setVideoUri($videoUri)
 * @method string getVideoUri()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListVideoAudios extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 */
class DetectLogo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setUser($user)
 * @method string getUser()
 */
class DeleteFaceSearchUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 */
class CreateTagSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtType($tgtType)
 * @method string getTgtType()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setSrcType($srcType)
 * @method string getSrcType()
 * @method $this setStartPage($startPage)
 * @method int getStartPage()
 * @method $this setEndPage($endPage)
 * @method int getEndPage()
 * @method $this setMaxSheetRow($maxSheetRow)
 * @method int getMaxSheetRow()
 * @method $this setMaxSheetCol($maxSheetCol)
 * @method int getMaxSheetCol()
 * @method $this setMaxSheetCount($maxSheetCount)
 * @method int getMaxSheetCount()
 * @method $this setSheetOnePage($sheetOnePage)
 * @method bool getSheetOnePage()
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setTgtFilePrefix($tgtFilePrefix)
 * @method string getTgtFilePrefix()
 * @method $this setTgtFileSuffix($tgtFileSuffix)
 * @method string getTgtFileSuffix()
 * @method $this setTgtFilePages($tgtFilePages)
 * @method string getTgtFilePages()
 * @method $this setFitToPagesTall($fitToPagesTall)
 * @method bool getFitToPagesTall()
 * @method $this setFitToPagesWide($fitToPagesWide)
 * @method bool getFitToPagesWide()
 * @method $this setPdfVector($pdfVector)
 * @method bool getPdfVector()
 * @method $this setHidecomments($hidecomments)
 * @method bool getHidecomments()
 */
class ConvertOfficeFormat extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setCheckEmpty($checkEmpty)
 * @method string getCheckEmpty()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 */
class CreateDeleteFaceSetJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 */
class ListVideoTasks extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class GetFaceSearchGroup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setOperation($operation)
 * @method string getOperation()
 */
class GroupFaces extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setContentType($contentType)
 * @method string getContentType()
 * @method $this setModifiedTimeStart($modifiedTimeStart)
 * @method int getModifiedTimeStart()
 * @method $this setModifiedTimeEnd($modifiedTimeEnd)
 * @method int getModifiedTimeEnd()
 * @method $this setSizeLimitStart($sizeLimitStart)
 * @method int getSizeLimitStart()
 * @method $this setSizeLimitEnd($sizeLimitEnd)
 * @method int getSizeLimitEnd()
 * @method $this setPageNumLimitStart($pageNumLimitStart)
 * @method int getPageNumLimitStart()
 * @method $this setPageNumLimitEnd($pageNumLimitEnd)
 * @method int getPageNumLimitEnd()
 * @method $this setCustomKey1($customKey1)
 * @method string getCustomKey1()
 * @method $this setCustomKey2($customKey2)
 * @method string getCustomKey2()
 * @method $this setCustomKey3($customKey3)
 * @method string getCustomKey3()
 * @method $this setCustomKey4($customKey4)
 * @method string getCustomKey4()
 * @method $this setCustomKey5($customKey5)
 * @method string getCustomKey5()
 * @method $this setCustomKey6($customKey6)
 * @method string getCustomKey6()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setSet($set)
 * @method string getSet()
 */
class SearchDocIndex extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 */
class DeleteFaceSearchImageById extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setVideoUri($videoUri)
 * @method string getVideoUri()
 * @method $this setGrabType($grabType)
 * @method string getGrabType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 */
class CreateVideoAnalyseTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeleteFormatConvertJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListPhotoJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setCheckEmpty($checkEmpty)
 * @method string getCheckEmpty()
 * @method $this setLazyMode($lazyMode)
 * @method string getLazyMode()
 */
class DeleteTagSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListImageFaces extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setFaceIds($faceIds)
 * @method string getFaceIds()
 */
class DeleteFaceById extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class DeleteTagByName extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setIsQualityLimit($isQualityLimit)
 * @method bool getIsQualityLimit()
 * @method $this setChooseBiggestFace($chooseBiggestFace)
 * @method bool getChooseBiggestFace()
 * @method $this setRegisterCheckLevel($registerCheckLevel)
 * @method string getRegisterCheckLevel()
 */
class RegistFace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 */
class CreateVideoAIJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListFaceSets extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DeleteFaceSearchGroup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 * @method $this setRemarksA($remarksA)
 * @method string getRemarksA()
 * @method $this setRemarksB($remarksB)
 * @method string getRemarksB()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceUri($sourceUri)
 * @method string getSourceUri()
 * @method $this setSourcePosition($sourcePosition)
 * @method string getSourcePosition()
 * @method $this setRemarksC($remarksC)
 * @method string getRemarksC()
 * @method $this setRemarksD($remarksD)
 * @method string getRemarksD()
 * @method $this setExternalId($externalId)
 * @method string getExternalId()
 */
class UpdateImage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 */
class DeleteProject extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListVideoTagJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeletePhotoJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListTagNames extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 */
class DetectImageLogos extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListConvertOfficeFormatTasks extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setVideoUri($videoUri)
 * @method string getVideoUri()
 * @method $this setResources($resources)
 * @method bool getResources()
 */
class DeleteVideo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setIsQualityLimit($isQualityLimit)
 * @method bool getIsQualityLimit()
 * @method $this setChooseBiggestFace($chooseBiggestFace)
 * @method bool getChooseBiggestFace()
 * @method $this setRegisterCheckLevel($registerCheckLevel)
 * @method string getRegisterCheckLevel()
 */
class FaceRegist extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 */
class DetectFace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 */
class DetectImageFaces extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeleteConvertOfficeFormatTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class RemoveTagByName extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 */
class CreatePhotoJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 * @method $this setForce($force)
 * @method string getForce()
 * @method $this setChain($chain)
 * @method string getChain()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 */
class CreateIndexFaceJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetBatchIndexFrameTagTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setUser($user)
 * @method string getUser()
 */
class GetFaceSearchImage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setUniqueId($uniqueId)
 * @method string getUniqueId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCustomKey1($customKey1)
 * @method string getCustomKey1()
 * @method $this setCustomKey2($customKey2)
 * @method string getCustomKey2()
 * @method $this setCustomKey3($customKey3)
 * @method string getCustomKey3()
 * @method $this setCustomKey4($customKey4)
 * @method string getCustomKey4()
 * @method $this setCustomKey5($customKey5)
 * @method string getCustomKey5()
 * @method $this setCustomKey6($customKey6)
 * @method string getCustomKey6()
 * @method $this setSet($set)
 * @method string getSet()
 */
class UpdateDocIndexMeta extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setGroupCoverFaceId($groupCoverFaceId)
 * @method string getGroupCoverFaceId()
 */
class UpdateFaceGroup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 * @method $this setLibrary($library)
 * @method string getLibrary()
 */
class DetectImageCelebrity extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 */
class DetectTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setNewCU($newCU)
 * @method int getNewCU()
 * @method $this setNewServiceRole($newServiceRole)
 * @method string getNewServiceRole()
 */
class UpdateProject extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetVideoAnalyseJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListPhotoProcessTasks extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 */
class ListSetTags extends Request
{

}/**
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setCondition($condition)
 * @method string getCondition()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListTagJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setCheckEmpty($checkEmpty)
 * @method string getCheckEmpty()
 * @method $this setLazyMode($lazyMode)
 * @method string getLazyMode()
 */
class DeleteFaceSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListFormatConvertJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 */
class CreateFaceSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 */
class GetImage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setCreateTimeStart($createTimeStart)
 * @method string getCreateTimeStart()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class ListImages extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setResultNum($resultNum)
 * @method int getResultNum()
 * @method $this setIsThreshold($isThreshold)
 * @method bool getIsThreshold()
 * @method $this setSearchThresholdLevel($searchThresholdLevel)
 * @method string getSearchThresholdLevel()
 */
class FaceSearch extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 */
class DetectClothes extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 */
class DeleteFaceByUrl extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setUniqueId($uniqueId)
 * @method string getUniqueId()
 * @method $this setSet($set)
 * @method string getSet()
 */
class GetDocIndex extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setUniqueId($uniqueId)
 * @method string getUniqueId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setContentType($contentType)
 * @method string getContentType()
 * @method $this setCustomKey1($customKey1)
 * @method string getCustomKey1()
 * @method $this setCustomKey2($customKey2)
 * @method string getCustomKey2()
 * @method $this setCustomKey3($customKey3)
 * @method string getCustomKey3()
 * @method $this setCustomKey4($customKey4)
 * @method string getCustomKey4()
 * @method $this setCustomKey5($customKey5)
 * @method string getCustomKey5()
 * @method $this setCustomKey6($customKey6)
 * @method string getCustomKey6()
 * @method $this setSet($set)
 * @method string getSet()
 */
class CreateDocIndexTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageSizeRange($imageSizeRange)
 * @method string getImageSizeRange()
 * @method $this setImageTimeRange($imageTimeRange)
 * @method string getImageTimeRange()
 * @method $this setCreateTimeRange($createTimeRange)
 * @method string getCreateTimeRange()
 * @method $this setModifyTimeRange($modifyTimeRange)
 * @method string getModifyTimeRange()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceUriPrefix($sourceUriPrefix)
 * @method string getSourceUriPrefix()
 * @method $this setRemarksAPrefix($remarksAPrefix)
 * @method string getRemarksAPrefix()
 * @method $this setRemarksBPrefix($remarksBPrefix)
 * @method string getRemarksBPrefix()
 * @method $this setTagNames($tagNames)
 * @method string getTagNames()
 * @method $this setOCRContentsMatch($oCRContentsMatch)
 * @method string getOCRContentsMatch()
 * @method $this setAgeRange($ageRange)
 * @method string getAgeRange()
 * @method $this setGender($gender)
 * @method string getGender()
 * @method $this setEmotion($emotion)
 * @method string getEmotion()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setLocationBoundary($locationBoundary)
 * @method string getLocationBoundary()
 * @method $this setRemarksCPrefix($remarksCPrefix)
 * @method string getRemarksCPrefix()
 * @method $this setRemarksDPrefix($remarksDPrefix)
 * @method string getRemarksDPrefix()
 * @method $this setExternalId($externalId)
 * @method string getExternalId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class FindImages extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method string getMaxKeys()
 */
class GetTagPhotos extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 */
class DeleteImage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListVideoAnalyseJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setClearIndexData($clearIndexData)
 * @method string getClearIndexData()
 */
class DeleteTagJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setStartTime($startTime)
 * @method Float getStartTime()
 * @method $this setInterval($interval)
 * @method Float getInterval()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setTgtWidth($tgtWidth)
 * @method int getTgtWidth()
 * @method $this setTgtHeight($tgtHeight)
 * @method int getTgtHeight()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 * @method $this setKeepFrame($keepFrame)
 * @method bool getKeepFrame()
 * @method $this setCutBlack($cutBlack)
 * @method bool getCutBlack()
 * @method $this setPJobId($pJobId)
 * @method string getPJobId()
 * @method $this setSrcOwnerId($srcOwnerId)
 * @method int getSrcOwnerId()
 */
class CreateFrameGrabJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeleteFrameGrabJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 */
class ListTagName extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUriA($srcUriA)
 * @method string getSrcUriA()
 * @method $this setSrcUriB($srcUriB)
 * @method string getSrcUriB()
 */
class CompareFace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 */
class DetectImageTags extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListFaceSearchGroupUsers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 * @method $this setTgtUri($tgtUri)
 * @method string getTgtUri()
 * @method $this setStyle($style)
 * @method string getStyle()
 * @method $this setNotifyTopicName($notifyTopicName)
 * @method string getNotifyTopicName()
 * @method $this setNotifyEndpoint($notifyEndpoint)
 * @method string getNotifyEndpoint()
 * @method $this setExternalID($externalID)
 * @method string getExternalID()
 */
class PhotoProcess extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 * @method $this setJobType($jobType)
 * @method string getJobType()
 */
class ListImageJobs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeleteOfficeConversionTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 */
class RemoveFaceByUrl extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSetName($setName)
 * @method string getSetName()
 */
class CreateSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setVideoUri($videoUri)
 * @method string getVideoUri()
 */
class GetVideo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setCreateTimeStart($createTimeStart)
 * @method string getCreateTimeStart()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListVideos extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setServiceRole($serviceRole)
 * @method string getServiceRole()
 * @method $this setCU($cU)
 * @method int getCU()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setBillingType($billingType)
 * @method string getBillingType()
 */
class PutProject extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setReturnAttribute($returnAttribute)
 * @method string getReturnAttribute()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class GetFaceSetDetail extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setClearIndexData($clearIndexData)
 * @method string getClearIndexData()
 */
class DeleteFaceJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 */
class ListFaceGroups extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeletePornBatchDetectJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSrcUri($srcUri)
 * @method string getSrcUri()
 */
class CreateFaceJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetDocIndexTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setImageUriA($imageUriA)
 * @method string getImageUriA()
 * @method $this setImageUriB($imageUriB)
 * @method string getImageUriB()
 * @method $this setFaceIdA($faceIdA)
 * @method string getFaceIdA()
 * @method $this setFaceIdB($faceIdB)
 * @method string getFaceIdB()
 */
class CompareImageFaces extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetOfficeConversionTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSetName($setName)
 * @method string getSetName()
 */
class UpdateSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetFrameGrabJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobType($jobType)
 * @method string getJobType()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetImageJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 */
class DeleteSet extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetPornBatchDetectJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setSetId($setId)
 * @method string getSetId()
 * @method $this setSrcUris($srcUris)
 * @method string getSrcUris()
 * @method $this setForce($force)
 * @method string getForce()
 * @method $this setChain($chain)
 * @method string getChain()
 */
class IndexFace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetFrameTagAnalyseTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setImageUri($imageUri)
 * @method string getImageUri()
 */
class DetectImageTexts extends Request
{

}