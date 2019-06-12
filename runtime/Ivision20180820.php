<?php

namespace aliyun\sdk\services\Ivision20180820;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180820
 *
 * @package aliyun\sdk\services\Ivision20180820
 * @method QueryLivePredictList QueryLivePredictList()
 * @method GetIterationPerformance GetIterationPerformance()
 * @method GetIterations GetIterations()
 * @method UpdateLabel UpdateLabel()
 * @method QueryProject QueryProject()
 * @method GetUploadToken GetUploadToken()
 * @method SearchProject SearchProject()
 * @method StopLivePredict StopLivePredict()
 * @method QuickTestDataUrl QuickTestDataUrl()
 * @method CreateLabel CreateLabel()
 * @method GetPredictionDatas GetPredictionDatas()
 * @method GetTrainDatas GetTrainDatas()
 * @method StartLivePredict StartLivePredict()
 * @method CreateDataLabel CreateDataLabel()
 * @method DeleteLabel DeleteLabel()
 * @method CreateProject CreateProject()
 * @method DeleteProject DeleteProject()
 * @method QueryLivePredictResult QueryLivePredictResult()
 * @method CreateDatasFromPrediction CreateDatasFromPrediction()
 * @method TrainProject TrainProject()
 * @method UpdateProject UpdateProject()
 * @method DeletePredictData DeletePredictData()
 * @method GetLabels GetLabels()
 * @method DeleteIteration DeleteIteration()
 * @method DeleteData DeleteData()
 * @method QueryDataById QueryDataById()
 * @method CreateDatasFromUrls CreateDatasFromUrls()
 * @method DeleteDataLabel DeleteDataLabel()
 */
class V20180820
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryLivePredictList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 * @method $this setThreshold($threshold)
 * @method string getThreshold()
 */
class GetIterationPerformance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setState($state)
 * @method string getState()
 */
class GetIterations extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setLabelId($labelId)
 * @method string getLabelId()
 * @method $this setName($name)
 * @method string getName()
 */
class UpdateLabel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class QueryProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class GetUploadToken extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class SearchProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPredictId($predictId)
 * @method string getPredictId()
 */
class StopLivePredict extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 * @method $this setDataUrls($dataUrls)
 * @method string getDataUrls()
 */
class QuickTestDataUrl extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateLabel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 * @method $this setLabelId($labelId)
 * @method string getLabelId()
 * @method $this setThreshold($threshold)
 * @method string getThreshold()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetPredictionDatas extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 * @method $this setLabelId($labelId)
 * @method string getLabelId()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetTrainDatas extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setLiveName($liveName)
 * @method string getLiveName()
 * @method $this setLiveUrl($liveUrl)
 * @method string getLiveUrl()
 * @method $this setConfig($config)
 * @method string getConfig()
 * @method $this setOutput($output)
 * @method string getOutput()
 * @method $this setNotify($notify)
 * @method string getNotify()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class StartLivePredict extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setDataIds($dataIds)
 * @method string getDataIds()
 * @method $this setLabelId($labelId)
 * @method string getLabelId()
 */
class CreateDataLabel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setLabelId($labelId)
 * @method string getLabelId()
 */
class DeleteLabel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setProType($proType)
 * @method string getProType()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setAlgorithmId($algorithmId)
 * @method string getAlgorithmId()
 * @method $this setmodelId($modelId)
 * @method string getmodelId()
 */
class CreateProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class DeleteProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPredictId($predictId)
 * @method string getPredictId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setModelIds($modelIds)
 * @method string getModelIds()
 * @method $this setNextPageToken($nextPageToken)
 * @method string getNextPageToken()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryLivePredictResult extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setPreConfig($preConfig)
 * @method string getPreConfig()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 */
class CreateDatasFromPrediction extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class TrainProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateProject extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 * @method $this setDataIds($dataIds)
 * @method string getDataIds()
 */
class DeletePredictData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 */
class GetLabels extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 */
class DeleteIteration extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setDataIds($dataIds)
 * @method string getDataIds()
 */
class DeleteData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setIterationId($iterationId)
 * @method string getIterationId()
 * @method $this setDataId($dataId)
 * @method string getDataId()
 */
class QueryDataById extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setDataConfig($dataConfig)
 * @method string getDataConfig()
 */
class CreateDatasFromUrls extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setDataIds($dataIds)
 * @method string getDataIds()
 * @method $this setLabelId($labelId)
 * @method string getLabelId()
 */
class DeleteDataLabel extends Request
{

}