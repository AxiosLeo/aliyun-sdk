<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setNodeInstanceId($NodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setSqlIndex($SqlIndex)
 * @method integer getSqlIndex()
 * @method $this setOffset($Offset)
 * @method integer getOffset()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ListFlowNodeSqlResult extends EmrCommon
{
    public $action = 'ListFlowNodeSqlResult';
}
