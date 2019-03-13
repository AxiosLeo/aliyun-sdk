<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setStreamType($StreamType)
 * @method integer getStreamType()
 * @method $this setPreRecordDuration($PreRecordDuration)
 * @method integer getPreRecordDuration()
 * @method $this setRecordDuration($RecordDuration)
 * @method integer getRecordDuration()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class TriggerRecord extends IotCommon
{
    public $action = 'TriggerRecord';
}
