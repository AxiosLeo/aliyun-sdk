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
use aliyun\sdk\mts\request\Job\SubmitAnalysisJob;
use aliyun\sdk\mts\request\Job\SubmitJobs;
use aliyun\sdk\mts\request\Job\SubmitMediaInfoJob;

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

    /********************************** Template **************************************************/


    public static function AddTemplate(){

    }
}