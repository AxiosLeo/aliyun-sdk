<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/1 17:20
 */

namespace aliyun\sdk\mts;

use aliyun\sdk\mts\request\Category\AddCategory;
use aliyun\sdk\mts\request\Category\CategoryTree;
use aliyun\sdk\mts\request\Category\DeleteCategory;
use aliyun\sdk\mts\request\Category\ListAllCategory;
use aliyun\sdk\mts\request\Category\UpdateCategoryName;
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
use aliyun\sdk\mts\request\Media\AddMedia;
use aliyun\sdk\mts\request\Media\AddMediaTag;
use aliyun\sdk\mts\request\Media\DeleteMedia;
use aliyun\sdk\mts\request\Media\DeleteMediaTag;
use aliyun\sdk\mts\request\Media\ListMedia;
use aliyun\sdk\mts\request\Media\QueryMediaList;
use aliyun\sdk\mts\request\Media\QueryMediaListByURL;
use aliyun\sdk\mts\request\Media\UpdateMedia;
use aliyun\sdk\mts\request\Media\UpdateMediaCategory;
use aliyun\sdk\mts\request\Media\UpdateMediaCover;
use aliyun\sdk\mts\request\Media\UpdateMediaPublishState;
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
    public static function QueryJobList($JobIds)
    {
        return (new QueryJobList())->setJobIds($JobIds);
    }

    /**
     * 列出转码作业
     * @return ListJob
     */
    public static function ListJob()
    {
        return (new ListJob());
    }

    /**
     * 提交截图作业
     * @param array $input
     * @param array $snapshot_config
     * @return SubmitSnapshotJob
     */
    public static function SubmitSnapshotJob($input, $snapshot_config = [])
    {
        return (new SubmitSnapshotJob())->setInput($input)->setSnapshotConfig($snapshot_config);
    }

    /**
     * 查询截图作业
     * @param string $SnapshotJobIds
     * @return QuerySnapshotJobList
     */
    public static function QuerySnapshotJobList($SnapshotJobIds)
    {
        return (new QuerySnapshotJobList())->setSnapshotJobIds($SnapshotJobIds);
    }

    /********************************** Template **************************************************/

    /**
     * 新增自定义转码模版
     * @param $name
     * @return AddTemplate
     */
    public static function AddTemplate($name)
    {
        return (new AddTemplate())->setName($name);
    }

    /**
     * 更新自定义转码模版
     * @param $template_id
     * @param $name
     * @return UpdateTemplate
     */
    public static function UpdateTemplate($template_id, $name)
    {
        return (new UpdateTemplate())->setTemplateId($template_id)->setName($name);
    }

    /**
     * 查询自定义转码模板
     * @param $template_ids
     * @return QueryTemplateList
     */
    public static function QueryTemplateList($template_ids)
    {
        return (new QueryTemplateList())->setTemplateIds($template_ids);
    }

    /**
     * 搜索自定义转码模板
     * @return SearchTemplate
     */
    public static function SearchTemplate()
    {
        return (new SearchTemplate());
    }

    /**
     * 删除自定义转码模板
     * @param $template_id
     * @return DeleteTemplate
     */
    public static function DeleteTemplate($template_id)
    {
        return (new DeleteTemplate())->setTemplateId($template_id);
    }

    /**
     * 新增水印模版
     * @param $name
     * @param array $config
     * @return AddWaterMarkTemplate
     */
    public static function AddWaterMarkTemplate($name, $config)
    {
        return (new AddWaterMarkTemplate())->setName($name)->setConfig($config);
    }

    /**
     * 更新水印模版
     * @param $water_mark_template_id
     * @param $name
     * @param $config
     * @return UpdateWaterMarkTemplate
     */
    public static function UpdateWaterMarkTemplate($water_mark_template_id, $name, $config)
    {
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
    public static function QueryWaterMarkTemplateList($water_mark_template_ids)
    {
        return (new QueryWaterMarkTemplateList())->setWaterMarkTemplateIds($water_mark_template_ids);
    }

    /**
     * 搜索水印模板
     * @return SearchWaterMarkTemplate
     */
    public static function SearchWaterMarkTemplate()
    {
        return (new SearchWaterMarkTemplate());
    }

    /**
     * 删除水印模板
     * @param $water_mark_template_id
     * @return DeleteWaterMarkTemplate
     */
    public static function DeleteWaterMarkTemplate($water_mark_template_id)
    {
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
    public static function UpdatePipeline($pipeline_id, $name, $state)
    {
        return (new UpdatePipeline())->setPipelineId($pipeline_id)->setName($name)->setState($state);
    }

    /**
     * 查询管道
     * @param $pipeline_ids
     * @return QueryPipelineList
     */
    public static function QueryPipelineList($pipeline_ids)
    {
        return (new QueryPipelineList())->setPipelineIds($pipeline_ids);
    }

    /**
     * 搜索管道
     * @return SearchPipeline
     */
    public static function SearchPipeline()
    {
        return (new SearchPipeline());
    }

    /********************************** Workflow **************************************************/

    /**
     * 新增媒体工作流
     * @param $name
     * @param $topology
     * @return AddMediaWorkflow
     */
    public static function AddMediaWorkflow($name, $topology)
    {
        return (new AddMediaWorkflow())->setName($name)->setTopology($topology);
    }

    /**
     * 激活媒体工作流
     * @param $media_workflow_id
     * @return ActivateMediaWorkflow
     */
    public static function ActivateMediaWorkflow($media_workflow_id)
    {
        return (new ActivateMediaWorkflow())->setMediaWorkflowId($media_workflow_id);
    }

    /**
     * 停用媒体工作流
     * @param $media_workflow_id
     * @return DeactivateMediaWorkflow
     */
    public static function DeactivateMediaWorkflow($media_workflow_id)
    {
        return (new DeactivateMediaWorkflow())->setMediaWorkflowId($media_workflow_id);
    }

    /**
     * 删除媒体工作流
     * @param $media_workflow_id
     * @return DeleteMediaWorkflow
     */
    public static function DeleteMediaWorkflow($media_workflow_id)
    {
        return (new DeleteMediaWorkflow())->setMediaWorkflowId($media_workflow_id);
    }

    /**
     * 更新媒体工作流
     * @param $media_workflow_id
     * @param $topology
     * @return UpdateMediaWorkflow
     */
    public static function UpdateMediaWorkflow($media_workflow_id, $topology)
    {
        return (new UpdateMediaWorkflow())->setMediaWorkflowId($media_workflow_id)->setTopology($topology);
    }

    /**
     * 查询媒体工作流
     * @param $media_workflow_ids
     * @return QueryMediaWorkflowList
     */
    public static function QueryMediaWorkflowList($media_workflow_ids)
    {
        return (new QueryMediaWorkflowList())->setMediaWorkflowIds($media_workflow_ids);
    }

    /**
     * 搜索媒体工作流
     * @return SearchMediaWorkflow
     */
    public static function SearchMediaWorkflow()
    {
        return (new SearchMediaWorkflow());
    }

    /**
     * 遍历媒体工作流执行实例
     * @return ListMediaWorkflowExecutions
     */
    public static function ListMediaWorkflowExecutions()
    {
        return (new ListMediaWorkflowExecutions());
    }

    /**
     * 查询媒体工作流执行实例
     * @param $run_ids
     * @return QueryMediaWorkflowExecutionList
     */
    public static function QueryMediaWorkflowExecutionList($run_ids)
    {
        return (new QueryMediaWorkflowExecutionList())->setRunIds($run_ids);
    }

    /********************************** Media **************************************************/

    /**
     * 新增媒体
     * @param $file_url
     * @return AddMedia
     */
    public static function AddMedia($file_url)
    {
        return (new AddMedia())->setFileURL($file_url);
    }

    /**
     * 删除媒体
     * @param $media_ids
     * @return DeleteMedia
     */
    public static function DeleteMedia($media_ids)
    {
        return (new DeleteMedia())->setMediaIds($media_ids);
    }

    /**
     * 更新媒体-基本信息
     * @param $media_id
     * @return UpdateMedia
     */
    public static function UpdateMedia($media_id)
    {
        return (new UpdateMedia())->setMediaId($media_id);
    }

    /**
     * 更新媒体-类目
     * @param $media_id
     * @return UpdateMediaCategory
     */
    public static function UpdateMediaCategory($media_id)
    {
        return (new UpdateMediaCategory())->setMediaId($media_id);
    }

    /**
     * 更新媒体-封面
     * @param $media_id
     * @param $cover_url
     * @return UpdateMediaCover
     */
    public static function UpdateMediaCover($media_id, $cover_url)
    {
        return (new UpdateMediaCover())->setMediaId($media_id)->setCoverURL($cover_url);
    }

    /**
     * 更新媒体-添加标签
     * @param $media_id
     * @param $tag
     * @return AddMediaTag
     */
    public static function AddMediaTag($media_id, $tag)
    {
        return (new AddMediaTag())->setMediaId($media_id)->setTag($tag);
    }

    /**
     * 更新媒体-删除标签
     * @param $media_id
     * @param $tag
     * @return DeleteMediaTag
     */
    public static function DeleteMediaTag($media_id, $tag)
    {
        return (new DeleteMediaTag())->setMediaId($media_id)->setTag($tag);
    }

    /**
     * 更新媒体-发布状态
     * @param $media_id
     * @param bool $publish
     * @return UpdateMediaPublishState
     */
    public static function UpdateMediaPublishState($media_id, $publish){
        return (new UpdateMediaPublishState())->setMediaId($media_id)->setPublish($publish);
    }

    /**
     * 查询媒体-使用媒体ID
     * @param $media_ids
     * @return QueryMediaList
     */
    public static function QueryMediaList($media_ids){
        return (new QueryMediaList())->setMediaIds($media_ids);
    }

    /**
     * 查询媒体-使用OSS文件地址
     * @param $file_urls
     * @return QueryMediaListByURL
     */
    public static function QueryMediaListByURL($file_urls){
        return (new QueryMediaListByURL())->setFileURLs($file_urls);
    }

    /**
     * 遍历媒体
     * @return ListMedia
     */
    public static function ListMedia(){
        return (new ListMedia());
    }

    /********************************** Category **************************************************/

    /**
     * 新增类目
     * @param $cate_name
     * @return AddCategory
     */
    public static function AddCategory($cate_name){
        return (new AddCategory())->setCateName($cate_name);
    }

    /**
     * 删除类目
     * @param $cate_id
     * @return DeleteCategory
     */
    public static function DeleteCategory($cate_id){
        return (new DeleteCategory())->setCateId($cate_id);
    }

    /**
     * 更新类目
     * @param $cate_id
     * @param $name
     * @return UpdateCategoryName
     */
    public static function UpdateCategoryName($cate_id, $name){
        return (new UpdateCategoryName())->setCateId($cate_id)->setName($name);
    }

    /**
     * 查询类目树
     * @return CategoryTree
     */
    public static function CategoryTree(){
        return (new CategoryTree());
    }

    /**
     * 查询类目列表
     * @return ListAllCategory
     */
    public static function ListAllCategory(){
        return (new ListAllCategory());
    }
}