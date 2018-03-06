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
use aliyun\sdk\mts\request\Template\SearchTemplate;
use aliyun\sdk\mts\Template\AddTemplate;
use aliyun\sdk\mts\Template\QueryTemplateList;
use aliyun\sdk\mts\Template\UpdateTemplate;

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
}