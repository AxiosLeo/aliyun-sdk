<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setSpecifiedOffsetTime($SpecifiedOffsetTime)
 * @method integer getSpecifiedOffsetTime()
 * @method $this setWidth($Width)
 * @method string getWidth()
 * @method $this setHeight($Height)
 * @method string getHeight()
 * @method $this setCount($Count)
 * @method integer getCount()
 * @method $this setInterval($Interval)
 * @method integer getInterval()
 * @method $this setSpriteSnapshotConfig($SpriteSnapshotConfig)
 * @method string getSpriteSnapshotConfig()
 * @method $this setSnapshotTemplateId($SnapshotTemplateId)
 * @method string getSnapshotTemplateId()
 */
final class SubmitSnapshotJob extends VodCommon
{
    public $action = 'SubmitSnapshotJob';
}
