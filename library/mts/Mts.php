<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/1 17:20
 */

namespace aliyun\sdk\mts;

use aliyun\sdk\mts\request\Job\CancelJob;
use aliyun\sdk\mts\request\Job\ListJob;
use aliyun\sdk\mts\request\Job\QueryAnalysisJobList;
use aliyun\sdk\mts\request\Job\QueryJobList;
use aliyun\sdk\mts\request\Job\QueryMediaInfoJobList;
use aliyun\sdk\mts\request\Job\QuerySnapshotJobList;
use aliyun\sdk\mts\request\Job\SubmitAnalysisJob;
use aliyun\sdk\mts\request\Job\SubmitJobs;
use aliyun\sdk\mts\request\Job\SubmitMediaInfoJob;
use aliyun\sdk\mts\request\Job\SubmitSnapshotJob;
use aliyun\sdk\mts\request\Pipeline\QueryPipelineList;
use aliyun\sdk\mts\request\Pipeline\SearchPipeline;
use aliyun\sdk\mts\request\Pipeline\UpdatePipeline;
use aliyun\sdk\mts\request\Template\AddWaterMarkTemplate;
use aliyun\sdk\mts\request\Template\DeleteTemplate;
use aliyun\sdk\mts\request\Template\DeleteWaterMarkTemplate;
use aliyun\sdk\mts\request\Template\QueryWaterMarkTemplateList;
use aliyun\sdk\mts\request\Template\SearchTemplate;
use aliyun\sdk\mts\request\Template\AddTemplate;
use aliyun\sdk\mts\request\Template\QueryTemplateList;
use aliyun\sdk\mts\request\Template\SearchWaterMarkTemplate;
use aliyun\sdk\mts\request\Template\UpdateTemplate;
use aliyun\sdk\mts\request\Template\UpdateWaterMarkTemplate;
use aliyun\sdk\mts\request\Workflow\ActivateMediaWorkflow;
use aliyun\sdk\mts\request\Workflow\AddMediaWorkflow;
use aliyun\sdk\mts\request\Workflow\DeactivateMediaWorkflow;
use aliyun\sdk\mts\request\Workflow\DeleteMediaWorkflow;
use aliyun\sdk\mts\request\Workflow\ListMediaWorkflowExecutions;
use aliyun\sdk\mts\request\Workflow\QueryMediaWorkflowExecutionList;
use aliyun\sdk\mts\request\Workflow\QueryMediaWorkflowList;
use aliyun\sdk\mts\request\Workflow\SearchMediaWorkflow;
use aliyun\sdk\mts\request\Workflow\UpdateMediaWorkflow;

/**
 * Class Mts
 * API Document : https://help.aliyun.com/document_detail/66804.html
 * @package aliyun\sdk\mts
 */
class Mts
{
    /********************************** Job **************************************************/

    /**
     * 提交媒体信息作业
     * @param $input
     * @return SubmitMediaInfoJob
     */
    public static function SubmitMediaInfoJob($input)
    {
        return (new SubmitMediaInfoJob())->setInput($input);
    }

    /**
     * 查询媒体信息作业
     * @param $MediaInfoJobIds
     * @return QueryMediaInfoJobList
     */
    public static function QueryMediaInfoJobList($MediaInfoJobIds)
    {
        return (new QueryMediaInfoJobList())->setMediaInfoJobIds($MediaInfoJobIds);
    }

    /**
     * 提交模板分析作业
     * @param $PipelineId
     * @param $input
     * @return SubmitAnalysisJob
     */
    public static function SubmitAnalysisJob($PipelineId, $input)
    {
        return (new SubmitAnalysisJob())->setPipelineId($PipelineId)->setInput($input);
    }

    /**
     * 查询模板分析作业
     * @param $AnalysisJobIds
     * @return QueryAnalysisJobList
     */
    public static function QueryAnalysisJobList($AnalysisJobIds)
    {
        return (new QueryAnalysisJobList())->setAnalysisJobIds($AnalysisJobIds);
    }

    /**
     * 提交转码作业
     * @param $PipelineId
     * @param $input
     * @param $OutputBucket
     * @param $Outputs
     * @return SubmitJobs
     */
    public static function SubmitJobs($PipelineId, $input, $OutputBucket, $Outputs)
    {
        return (new SubmitJobs())
            ->setPipelineId($PipelineId)
            ->setInput($input)
            ->setOutputBucket($OutputBucket)
            ->setOutputs($Outputs);
    }

    /**
     * 取消转码作业
     * @param $JobId
     * @return CancelJob
     */
    public static function CancelJob($JobId)
    {
        return (new CancelJob())->setJobId($JobId);
    }

    /**
     * 查询转码作业
     * @param $JobIds
     * @return QueryJobList
     */
    public static function QueryJobList($JobIds){
        return (new QueryJobList())->setJobIds($JobIds);
    }

    /**
     * 列出转码作业
     * @return ListJob
     */
    public static function ListJob(){
        return (new ListJob());
    }

    /**
     * 提交截图作业
     * @param array $input
     * @param array $snapshot_config
     * @return SubmitSnapshotJob
     */
    public static function SubmitSnapshotJob($input, $snapshot_config = []){
        return (new SubmitSnapshotJob())->setInput($input)->setSnapshotConfig($snapshot_config);
    }

    /**
     * 查询截图作业
     * @param string $SnapshotJobIds
     * @return QuerySnapshotJobList
     */
    public static function QuerySnapshotJobList($SnapshotJobIds){
        return (new QuerySnapshotJobList())->setSnapshotJobIds($SnapshotJobIds);
    }

    /********************************** Template **************************************************/

    /**
     * 新增自定义转码模版
     * @param $name
     * @return AddTemplate
     */
    public static function AddTemplate($name){
        return (new AddTemplate())->setName($name);
    }

    /**
     * 更新自定义转码模版
     * @param $template_id
     * @param $name
     * @return UpdateTemplate
     */
    public static function UpdateTemplate($template_id, $name){
        return (new UpdateTemplate())->setTemplateId($template_id)->setName($name);
    }

    /**
     * 查询自定义转码模板
     * @param $template_ids
     * @return QueryTemplateList
     */
    public static function QueryTemplateList($template_ids){
        return (new QueryTemplateList())->setTemplateIds($template_ids);
    }

    /**
     * 搜索自定义转码模板
     * @return SearchTemplate
     */
    public static function SearchTemplate(){
        return (new SearchTemplate());
    }

    /**
     * 删除自定义转码模板
     * @param $template_id
     * @return DeleteTemplate
     */
    public static function DeleteTemplate($template_id){
        return (new DeleteTemplate())->setTemplateId($template_id);
    }

    /**
     * 新增水印模版
     * @param $name
     * @param array $config
     * @return AddWaterMarkTemplate
     */
    public static function AddWaterMarkTemplate($name, $config){
        return (new AddWaterMarkTemplate())->setName($name)->setConfig($config);
    }

    /**
     * 更新水印模版
     * @param $water_mark_template_id
     * @param $name
     * @param $config
     * @return UpdateWaterMarkTemplate
     */
    public static function UpdateWaterMarkTemplate($water_mark_template_id, $name, $config){
        return (new UpdateWaterMarkTemplate())
            ->setWaterMarkTemplateId($water_mark_template_id)
            ->setName($name)
            ->setConfig($config);
    }

    /**
     * 查询水印模板
     * @param $water_mark_template_ids
     * @return QueryWaterMarkTemplateList
     */
    public static function QueryWaterMarkTemplateList($water_mark_template_ids){
        return (new QueryWaterMarkTemplateList())->setWaterMarkTemplateIds($water_mark_template_ids);
    }

    /**
     * 搜索水印模板
     * @return SearchWaterMarkTemplate
     */
    public static function SearchWaterMarkTemplate(){
        return (new SearchWaterMarkTemplate());
    }

    /**
     * 删除水印模板
     * @param $water_mark_template_id
     * @return DeleteWaterMarkTemplate
     */
    public static function DeleteWaterMarkTemplate($water_mark_template_id){
        return (new DeleteWaterMarkTemplate())->setWaterMarkTemplateId($water_mark_template_id);
    }


    /********************************** Pipeline **************************************************/


    /**
     * 更新管道
     * @param $pipeline_id
     * @param $name
     * @param $state
     * @return UpdatePipeline
     */
    public static function UpdatePipeline($pipeline_id, $name, $state){
        return (new UpdatePipeline())->setPipelineId($pipeline_id)->setName($name)->setState($state);
    }

    /**
     * 查询管道
     * @param $pipeline_ids
     * @return QueryPipelineList
     */
    public static function QueryPipelineList($pipeline_ids){
        return (new QueryPipelineList())->setPipelineIds($pipeline_ids);
    }

    /**
     * 搜索管道
     * @return SearchPipeline
     */
    public static function SearchPipeline(){
        return (new SearchPipeline());
    }

    /********************************** Workflow **************************************************/

    /**
     * 新增媒体工作流
     * @param $name
     * @param $topology
     * @return AddMediaWorkflow
     */
    public static function AddMediaWorkflow($name,$topology){
        return (new AddMediaWorkflow())->setName($name)->setTopology($topology);
    }

    /**
     * 激活媒体工作流
     * @param $media_workflow_id
     * @return ActivateMediaWorkflow
     */
    public static function ActivateMediaWorkflow($media_workflow_id){
        return (new ActivateMediaWorkflow())->setMediaWorkflowId($media_workflow_id);
    }

    /**
     * 停用媒体工作流
     * @param $media_workflow_id
     * @return DeactivateMediaWorkflow
     */
    public static function DeactivateMediaWorkflow($media_workflow_id){
        return (new DeactivateMediaWorkflow())->setMediaWorkflowId($media_workflow_id);
    }

    /**
     * 删除媒体工作流
     * @param $media_workflow_id
     * @return DeleteMediaWorkflow
     */
    public static function DeleteMediaWorkflow($media_workflow_id){
        return (new DeleteMediaWorkflow())->setMediaWorkflowId($media_workflow_id);
    }

    /**
     * 更新媒体工作流
     * @param $media_workflow_id
     * @param $topology
     * @return UpdateMediaWorkflow
     */
    public static function UpdateMediaWorkflow($media_workflow_id, $topology){
        return (new UpdateMediaWorkflow())->setMediaWorkflowId($media_workflow_id)->setTopology($topology);
    }

    /**
     * 查询媒体工作流
     * @param $media_workflow_ids
     * @return QueryMediaWorkflowList
     */
    public static function QueryMediaWorkflowList($media_workflow_ids){
        return (new QueryMediaWorkflowList())->setMediaWorkflowIds($media_workflow_ids);
    }

    /**
     * 搜索媒体工作流
     * @return SearchMediaWorkflow
     */
    public static function SearchMediaWorkflow(){
        return (new SearchMediaWorkflow());
    }

    /**
     * 遍历媒体工作流执行实例
     * @return ListMediaWorkflowExecutions
     */
    public static function ListMediaWorkflowExecutions(){
        return (new ListMediaWorkflowExecutions());
    }

    /**
     * 查询媒体工作流执行实例
     * @param $run_ids
     * @return QueryMediaWorkflowExecutionList
     */
    public static function QueryMediaWorkflowExecutionList($run_ids){
        return (new QueryMediaWorkflowExecutionList())->setRunIds($run_ids);
    }
}