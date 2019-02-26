<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setStartTimeStamp($StartTimeStamp)
 * @method integer getStartTimeStamp()
 * @method $this setEndTimeStamp($EndTimeStamp)
 * @method integer getEndTimeStamp()
 * @method $this setCursor($Cursor)
 * @method string getCursor()
 * @method $this setSize($Size)
 * @method integer getSize()
 */
final class QueryAlarmHistory extends EmrCommon
{
    public $action = 'QueryAlarmHistory';
}
