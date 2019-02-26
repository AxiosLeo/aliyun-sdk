<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setAuthTimeout($AuthTimeout)
 * @method integer getAuthTimeout()
 * @method $this setPreviewSegment($PreviewSegment)
 * @method boolean getPreviewSegment()
 * @method $this setOutputType($OutputType)
 * @method string getOutputType()
 * @method $this setAdditionType($AdditionType)
 * @method string getAdditionType()
 */
final class GetMezzanineInfo extends VodCommon
{
    public $action = 'GetMezzanineInfo';
}
