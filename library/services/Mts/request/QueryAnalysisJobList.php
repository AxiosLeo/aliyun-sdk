<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAnalysisJobIds($AnalysisJobIds)
 * @method string getAnalysisJobIds()
 */
final class QueryAnalysisJobList extends MtsCommon
{
    public $action = 'QueryAnalysisJobList';
}
