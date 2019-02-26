<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTaskId($TaskId)
 * @method integer getTaskId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setStartCursor($StartCursor)
 * @method integer getStartCursor()
 * @method $this setEndCursor($EndCursor)
 * @method integer getEndCursor()
 */
final class GetOpsCommandResult extends EmrCommon
{
    public $action = 'GetOpsCommandResult';
}
